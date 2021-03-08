<?php

namespace App\Http\Controllers;

use App\Models\About1section;
use Illuminate\Http\Request;

class About1sectionController extends Controller
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
        $validation = $request->validateWithBag("about1section",[
            "titre" => 'required',
            "paragraphe" => 'required',
           
        ]);
        $store = new About1section();
        $store->titre= $request->titre;
        $store->paragraphe = $request->paragraphe;
        $store->save();
        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About1section  $about1section
     * @return \Illuminate\Http\Response
     */
    public function show(About1section $about1section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About1section  $about1section
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = About1section::find($id);
        return view('back/pages/edit/about1sectionEdit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About1section  $about1section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validateWithBag("about1section",[
            "titre" => 'required',
            "paragraphe" => 'required',
           
        ]);
        $update = About1section::find($id);
        $update->titre = $request->titre;
        $update->paragraphe = $request->paragraphe ;
        $update->save();
        return redirect('/backoffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About1section  $about1section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = About1section::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
}
