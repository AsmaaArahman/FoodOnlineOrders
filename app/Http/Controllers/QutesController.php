<?php

namespace App\Http\Controllers;

use App\Qutes;
use Illuminate\Http\Request;

class QutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Qutes = Qutes::all();
        return view('dashboard.qutes',['qutes'=> $Qutes,'countp' => count($Qutes) ]);
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
        $this->validate($request ,[
            'title' => 'required',            
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

          $Qutes = new Qutes;
          
          $Qutes->name = $request->input('title');
          $Qutes->descqute = $request->input('describ');
          $Qutes->imagesq =$filenametouplaode;
  
          if ($Qutes->save()) {
              return redirect('/qutes')->with('success','تم اضافة الوجبة');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qutes  $qutes
     * @return \Illuminate\Http\Response
     */
    public function show(Qutes $qute)
    {
        return view('dashboard.detailsqute',['qutes'=> $qute]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qutes  $qutes
     * @return \Illuminate\Http\Response
     */
    public function edit(Qutes $qutes)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qutes  $qutes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $qutes)
    {
        
        $this->validate($request ,[
            'title' => 'required',
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

        //$qutes->update(Input::all());
        $Qutes = Qutes::find($qutes);        
        $Qutes->name = $request->input('title');
        $Qutes->descqute = $request->input('describ');
        $Qutes->imagesq =$filenametouplaode;

        if ($Qutes->save()) {
            return redirect('/qutes')->with('success','تم تعديل الوجبة');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qutes  $qutes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qutes $qutes)
    {
        
        if ($qutes->delete()) {
            
            return redirect('/qutes')->with('success','تم حذف اكلة');
        }    
    }
}
