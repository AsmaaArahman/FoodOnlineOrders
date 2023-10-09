<?php

namespace App\Http\Controllers;

use App\Option;
use App\Meals;
use App\Plates;

use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Option = Option::all();
        return view('dashboard.option',['options'=> $Option,'countp' => count($Option) ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meals = Meals::all()->pluck('name', 'id');
        return view('dashboard.createoption')->with('meals',$meals);        
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
            'title' => 'required' ,          
            'price' => 'required' ,          
            'numb' => 'required' ,          
            'describ' => 'required',
            'image' => 'image:png,jpg,jpeg|nullable|max:2086'        
        ]);
        
        if($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalImage();

            $filepath = pathinfo($filename,PATHINFO_FILENAME);

            $fileext = $request->file('image')->getClientOriginalExtention();

            $filenametouplaode = $filepath .'_'.time().$fileext;
            $pathsave = $request->file('image')->storeAs('public/images',$filenametouplaode);
        }else {
            $filenametouplaode = 'default.png';
        }
        $Option = new Option;
        
        $Option->title = $request->input('title');
        $Option->price = $request->input('price');
        $Option->countnum = $request->input('numb');
        $Option->descr = $request->input('describ');
        $Option->formeal = $request->input('meal');
        $Option->image = $filenametouplaode;

        if ($Option->save()) {
            return redirect('/options')->with('success','تم اضافة اكلة');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        $plantes = Plates::all()->pluck('name','id');
        return view('dashboard.showoption',['option'=>$option,'plantes'=>$plantes]);        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        $meals = Meals::all()->pluck('name', 'id');
        return view('dashboard.editoption',['option'=>$option,'meals'=>$meals]);        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $option)
    {
        $this->validate($request ,[
            'title' => 'required' ,          
            'price' => 'required' ,          
            'countnum' => 'required' ,          
            'descr' => 'required',
            'image' => 'image:png,jpg,jpeg|nullable|max:2086'        
        ]);

        if($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalImage();

            $filepath = pathinfo($filename,PATHINFO_FILENAME);

            $fileext = $request->file('image')->getClientOriginalExtention();

            $filenametouplaode = $filepath .'_'.time().$fileext;
            $pathsave = $request->file('image')->storeAs('public/images',$filenametouplaode);
        }else {
            $filenametouplaode = 'default.png';
        }
        //$option->update($request->all());
        $Option = Option::find($option);
        $Option->title = $request->input('title');
        $Option->price = $request->input('price');
        $Option->countnum = $request->input('countnum');
        $Option->descr = $request->input('descr');
        $Option->formeal = $request->input('meal');
        $Option->images = $filenametouplaode;
        
        if ($Option->save()) {
            return redirect('/options')->with('success','تم اضافة اكلة');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        if ($option->delete()) {
            
            return redirect('/options')->with('success','تم حذف اكلة');
        }    
    }
}
