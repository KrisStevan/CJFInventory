<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Uses;
use Illuminate\Support\Facades\Redirect;

class UsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $use = Uses::all();
		
		return view('uses.index', compact('use'));
    }
	
	/**
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $search = $request->input('search');
        $use = Uses::where('useName', 'like', "%$search%")->get();
     
        return view('uses.index', ['use' => $use]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $use = new Uses();
		$use->useID = $request->useID;
		$use->useName = $request->useName;
		$use->save();
		
		return Redirect::to('uses');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $use = Uses::where('useID', $id)->first();
		
		return view('uses.edit', ['use' => $use]);
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
        $use = Uses::find($id);
		
		$use->useName = $request->useName;
		$use->save();

		return Redirect::to('uses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $use = Uses::find($id);
		$use->delete();
		
		return Redirect::to('uses');
    }
}
