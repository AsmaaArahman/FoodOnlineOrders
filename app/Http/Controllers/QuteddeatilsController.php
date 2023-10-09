<?php

namespace App\Http\Controllers;

use App\Quteddeatils;
use App\Qutes;
use App\Option;
use App\Meals;
use Illuminate\Http\Request;

class QuteddeatilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Option =  Option::all('title','id')->pluck('title','id');
        $Meals   =  Meals::all()->pluck('name','id');
        $qute   =  Qutes::all()->pluck('name','id');
        return view('dashboard.detailsq',['option'=> $Option,'qute' => $qute,'meals' => $Meals  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'price' =>'required',
            'days' =>'required',
        ]);

        $quteddeatils = new Quteddeatils;
        $quteddeatils->option_id = $request->input('option');
        $quteddeatils->qutes_id = $request->input('qute');
        $quteddeatils->priced = $request->input('price');
        $quteddeatils->days = $request->input('days');
        
        if ($quteddeatils->save()) {
            return redirect('/details')->with('success','تم اضافة اكلة');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quteddeatils  $quteddeatils
     * @return \Illuminate\Http\Response
     */
    public function show(Quteddeatils $quteddeatils)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quteddeatils  $quteddeatils
     * @return \Illuminate\Http\Response
     */
    public function edit(Quteddeatils $quteddeatils)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quteddeatils  $quteddeatils
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quteddeatils $quteddeatils)
    {
        $this->validate($request ,[
            'title' => 'required' ,          
            'price' => 'required'        
        ]);
        $quteddeatils->update($request->all());

        if ($quteddeatils->save()) {

            return redirect('/options')->with('success','تم اضافة اكلة');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quteddeatils  $quteddeatils
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quteddeatils $quteddeatils)
    {
        
        if ($option->delete()) {
            
            return redirect('/options')->with('success','تم حذف اكلة');
        }    
    }
}
