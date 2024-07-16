<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Kind;
use Illuminate\Support\Facades\Redirect;

class KindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kind = Kind::all();
		
        return view('kinds.index', compact('kind'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kinds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kind = new Kind();
        $kind->kindID = $request->kindID;
        $kind->kindName = $request->kindName;
        $kind->stock = $request->stock;
        $kind->ordered = "0";
        $kind->save();
        
        return Redirect::to('kinds');
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
        $kind = Kind::where('kindName', 'like', "%$search%")->get();

        return view('kinds.index', ['kind' => $kind]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kind = Kind::where('kindID', $id)->first();
		
        return view('kinds.edit', ['kind' => $kind]);
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
        $kind = Kind::find($id);
		
        $kind->kindName = $request->kindName;
        $kind->stock = $request->stock;
        $kind->ordered = $request->ordered;
        $kind->save();

        return Redirect::to('kinds');
    }
}