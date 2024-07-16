<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Colour;
use Illuminate\Support\Facades\Redirect;

class ColourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colour = Colour::all();
		
        return view('colours.index', compact('colour'));
    }

    public function show(Request $request)
    {
        $search = $request->input('search');
        $colour = Colour::where('colourName', 'like', "%$search%")->get();
  
        return view('colours.index', ['colour' => $colour]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $colour = new Colour();
        $colour->colourID = $request->colourID;
        $colour->colourName = $request->colourName;
        $colour->save();
        
        return Redirect::to('colours')->with('success', 'Data Created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colour = Colour::where('colourID', $id)->first();
        
        return view('colours.edit', ['colour' => $colour]);
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
        $colour = Colour::find($id);

        $colour->colourName = $request->colourName;
        $colour->save();

        return Redirect::to('colours')->with('success', 'Data Updated. ID: '. $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colour = Colour::find($id);
        $colour->delete();

        return Redirect::to('colours')->with('success', 'Data Deleted.');
    }
}