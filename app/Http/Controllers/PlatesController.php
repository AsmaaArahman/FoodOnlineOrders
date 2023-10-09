<?php

namespace App\Http\Controllers;

use App\Plates;
use Illuminate\Http\Request;

class PlatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantes = Plates::all();
        return view('dashboard.plantes',['plantes'=> $plantes,'countp' => count($plantes) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plantes = Plates::all();
        return view('dashboard.plantes')->with('plantes', $plantes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'title' => 'required',
            'image' => 'nullable|image:jpg,png,jpeg|max:2086',
        ]);

        $plantes = new Plates;
        if($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalName();

            $filepath = pathinfo($filename,PATHINFO_FILENAME);

            $fileext = $request->file('image')->getClientOriginalExtension();

            $filenametouplaode = $filepath .'_'.time().$fileext;
            $pathsave = $request->file('image')->storeAs('public/images',$filenametouplaode);
        }else {
            $filenametouplaode = 'default.png';
        }

        $plantes->name = $request->input('title');
        $plantes->images = $filenametouplaode;

        if ($plantes->save()) {
            return redirect('/plantes')->with('success','تم اضافة طباق');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plates  $plates
     * @return \Illuminate\Http\Response
     */
    public function show(Plates $plante)
    {
//        $plantes = Plates::find($plates);
        dd($plante);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plates  $plates
     * @return \Illuminate\Http\Response
     */
    public function edit(Plates $plante)
    {
        return view('dashboard.editeplantes')->with('plantes', $plante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plates  $plates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plates $plante)
    {
        $this->validate($request ,[
            'title' => 'required'
        ]);
        $plante->name = $request->input('title');

        if ($plante->save()) {
            return redirect('/plantes')->with('success','تم تعديل طباق');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plates  $plates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plates $plante)
    {
        if ($plante->delete()) {

            return redirect('/plantes')->with('success','تم حذف طباق');
        }
    }
}
