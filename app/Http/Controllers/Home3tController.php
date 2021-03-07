<?php

namespace App\Http\Controllers;

use App\Models\Home3t;
use Illuminate\Http\Request;

class Home3tController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validateWithBag("homet3",[
            "titre" => 'required',
        ]);
        $store = new Home3t();
        $store->titre= $request->titre;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home3t  $home3t
     * @return \Illuminate\Http\Response
     */
    public function show(Home3t $home3t)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home3t  $home3t
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Home3t::find($id);
        return view('back/pages/edit/homet3Edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home3t  $home3t
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validateWithBag("homet3",[
            "titre" => 'required',
          
           
        ]);
        $update = Home3t::find($id);
        $update->titre = $request->titre;
        $update->save();
        return redirect('/backoffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home3t  $home3t
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Home3t::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
