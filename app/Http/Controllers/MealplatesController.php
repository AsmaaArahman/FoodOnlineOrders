<?php

namespace App\Http\Controllers;

use App\Mealplates;
use Illuminate\Http\Request;

class MealplatesController extends Controller
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
        $mealplates = new Mealplates;
        $mealplates->option_id = $request->input('foroption');
        $mealplates->plates_id = $request->input('forplante');
        if ($mealplates->save()) {
            return back()->with('success','تم اضافة الطبق');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mealplates  $mealplates
     * @return \Illuminate\Http\Response
     */
    public function show(Mealplates $mealplates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mealplates  $mealplates
     * @return \Illuminate\Http\Response
     */
    public function edit(Mealplates $mealplates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mealplates  $mealplates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mealplates $mealplates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mealplates  $mealplates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mealplates $mealplates)
    {
        if($mealplates->delete()){
            return back()->with('success','تم حذف');
        }
    }
}
