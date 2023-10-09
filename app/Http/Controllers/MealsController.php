<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meals;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Meals = Meals::all();
        return view('dashboard.meals',['meals'=> $Meals,'countp' => count($Meals) ]);
    
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
          'title' => 'required'            
        ]);
        $Meals = new Meals;
        
        $Meals->name = $request->input('title');

        if ($Meals->save()) {
            return redirect('/meals')->with('success','تم اضافة الوجبة');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request ,[
            'title' => 'required'            
        ]);
        $Mealsf = Meals::find($id);
        $Mealsf->name = $request->input('title');
        
        if ($Mealsf->save()) {
            return redirect('/meals')->with('success','تم تعديل الوجبة');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mealsf = Meals::find($id)->delete();
        return redirect('/meals')->with('success','تم حذف الوجبة');

    }
}
