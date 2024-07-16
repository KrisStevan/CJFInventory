<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Material;
use Illuminate\Support\Facades\Redirect;

class MaterialController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
    public function index()
    {
		$material = Material::all();
		
		return view('materials.index', compact('material'));
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $material = new Material();
		$material->materialID = $request->materialID;
		$material->materialName = $request->materialName;
		$material->save();
		
		return Redirect::to('materials');
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
        $material = Material::where('materialName', 'LIKE', "%$search%")->get();

        return view('materials.index', ['material' => $material]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = Material::where('materialID', $id)->first();
		
		return view('materials.edit', ['material' => $material]);
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
        $material = Material::find($id);
		
		$material->materialName = $request->materialName;
		$material->save();

		return Redirect::to('materials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::find($id);
		$material->delete();
		
		return Redirect::to('materials');
    }
}