<?php

namespace App\Http\Controllers;

use App\Models\About2sectionImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class About2sectionImageController extends Controller
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
        $validation = $request->validateWithBag("about2sectionImage",[
            'src'=>'required',
           
        ]);
        $store = new About2sectionImage();
        $store->src = $request->src;
        Storage::put('public/img', $request->file('src'));
        $store->src = $request->file('src')->hashName();
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About2sectionImage  $about2sectionImage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = About2sectionImage::find($id);
        return view('back/pages/show/about2sectionImageShow',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About2sectionImage  $about2sectionImage
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $edit = About2sectionImage::find($id);
    //     return view('back/pages/edit/about2sectionImageEdit',compact('edit'));
    // }

    // public function update(Request $request,$id)
    // {
    //     $validation = $request->validateWithBag("about2sectionImage",[
    //         "src" => 'required',
            
           
    //     ]);
    //     $update = About2sectionImage::find($id);
    //     $update->src = $request->src;
    //     $update->save();
    //     return redirect('/backoffice');
    // }
    public function destroy($id)
    {
        $destroy = About2sectionImage::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
