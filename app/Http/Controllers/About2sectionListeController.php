<?php

namespace App\Http\Controllers;

use App\Models\About2sectionListe;
use Illuminate\Http\Request;

class About2sectionListeController extends Controller
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
        $validation = $request->validateWithBag("about2sectionListe",[
            "titre" => 'required',
            "icon" => 'required',
            "paragraphe" => 'required',
           
        ]);
        $store = new About2sectionListe();
        $store->titre= $request->titre;
        $store->icon= $request->icon;
        $store->paragraphe = $request->paragraphe;
        $store->save();
        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About2sectionListe  $about2sectionListe
     * @return \Illuminate\Http\Response
     */
    public function show(About2sectionListe $about2sectionListe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About2sectionListe  $about2sectionListe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = About2sectionListe::find($id);
        return view('back/pages/edit/about2sectionListeEdit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About2sectionListe  $about2sectionListe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validation = $request->validateWithBag("about2sectionListe",[
            "titre" => 'required',
            "icon" => 'required',
            "paragraphe" => 'required',
           
        ]);
        $update =About2sectionListe::find($id);
        $update->titre = $request->titre;
        $update->icon = $request->icon;
        $update->paragraphe = $request->paragraphe ;
        $update->save();
        return redirect('/backoffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About2sectionListe  $about2sectionListe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = About2sectionListe::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
}
