<?php

namespace App\Http\Controllers;

use App\Models\Home2t;
use Illuminate\Http\Request;

class Home2tController extends Controller
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
        $validation = $request->validateWithBag("homet2",[
            "titre" => 'required',
        ]);
        $store = new Home2t();
        $store->titre= $request->titre;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home2t  $home2t
     * @return \Illuminate\Http\Response
     */
    public function show(Home2t $home2t)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home2t  $home2t
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Home2t::find($id);
        return view('back/pages/edit/homet2Edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home2t  $home2t
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validateWithBag("homet2",[
            "titre" => 'required', 
        ]);
        $update = Home2t::find($id);
        $update->titre = $request->titre;
        $update->save();
        return redirect('/backoffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home2t  $home2t
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Home2t::find($id);
        $destroy->delete();
        return redirect()->back();
    }

}
