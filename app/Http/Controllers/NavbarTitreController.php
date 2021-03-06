<?php

namespace App\Http\Controllers;

use App\Models\NavBarLien;
use App\Models\NavbarTitre;
use Illuminate\Http\Request;

class NavbarTitreController extends Controller
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
        $store = new NavbarTitre();
        $store->titre= $request->titre;
        $store->href = $request->href;
        $store->save();
        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NavbarTitre  $navbarTitre
     * @return \Illuminate\Http\Response
     */
    public function show(NavbarTitre $navbarTitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NavbarTitre  $navbarTitre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = NavbarTitre::find($id);
        return view('back/pages/edit/navbarTitreEdit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NavbarTitre  $navbarTitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = NavbarTitre::find($id);
        $update->titre = $request->titre;
        $update->href = $request->href;
        $update->save();
        return redirect('/backoffice/#bo-navbar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NavbarTitre  $navbarTitre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = NavbarTitre::find($id);
        $destroy->delete();
        return redirect()->back();
    }

}
