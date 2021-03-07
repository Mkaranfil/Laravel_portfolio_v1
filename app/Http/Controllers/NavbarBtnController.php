<?php

namespace App\Http\Controllers;

use App\Models\NavbarBtn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NavbarBtnController extends Controller
{
   
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validation = $request->validateWithBag("navbarBtn",[
            "nom" => 'required',
            "src" => "required|mimes:pdf|max:10000",
        ]);
        $store = new NavbarBtn();
        $store->nom = $request->nom;
        $store->src = $request->src;
        Storage::put('public/fichier', $request->file('src'));
        $store->src = $request->file('src')->hashName();
        $store->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $show = NavbarBtn::find($id);
        return view('back/pages/show/navbarBtnShow',compact('show'));
    }
    public function edit($id)
    {
        $edit = NavbarBtn::find($id);
        return view('back/pages/edit/navbarBtnEdit',compact('edit'));
    }
    public function update(Request $request,$id)
    {
        $validation = $request->validateWithBag("navbarBtn",[
            "nom" => 'required',
            "src" => "required|mimes:pdf|max:10000",
           
        ]);
        $update = NavbarBtn::find($id);
        $update->nom = $request->nom;
        $update->src = $request->src;
        $update->save();
        return redirect('/backoffice');
    }
    public function destroy($id)
    {
        $destroy = NavbarBtn::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
