<?php

namespace App\Http\Controllers;

use App\Models\NavBarLien;
use Illuminate\Http\Request;

class NavBarLienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back/pages/backoffice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new NavBarLien();
        $store->nom = $request->nom;
        $store->href = $request->href;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NavBarLien  $navBarLien
     * @return \Illuminate\Http\Response
     */
    public function show(NavBarLien $navBarLien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NavBarLien  $navBarLien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = NavBarLien::find($id);
        return view('back/pages/edit/navbarLienEdit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NavBarLien  $navBarLien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = NavBarLien::find($id);
        $update->nom= $request->nom;
        $update->href = $request->href;
        $update->save();
        return redirect('/backoffice/#bo-navbarlien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NavBarLien  $navBarLien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = NavBarLien::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function destroyAll()
    {
        $destroy = NavBarLien::all();
        foreach ($destroy as $item) {
            $item->delete();
        }
        return redirect()->back();
    }
}
