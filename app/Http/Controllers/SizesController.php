<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Size;
use Illuminate\Support\Facades\Redirect;

class SizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = Size::all();
		
		return view('sizes.index', compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $size = new Size();
		$size->sizeID = $request->sizeID;
		$size->sizeName = $request->sizeName;
		$size->sizeValue = $request->sizeValue;
		$size->save();
		
		return Redirect::to('sizes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $search = $request->input('search');
        $size = Size::where('sizeName', 'like', "%$search%")->get();

        return view('sizes.index', ['size' => $size]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $size = Size::where('sizeID', $id)->first();
		
		return view('sizes.edit', ['size' => $size]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $size = Size::findOrFail($id);
        $size->sizeName = $request->input('sizeName');
        $size->sizeValue = $request->input('sizeValue');
        $size->save();

        return Redirect::to('sizes')->with('success', 'Data Updated. ID: '. $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = Size::find($id);
		$size->delete();
		
		return Redirect::to('sizes');
    }
}