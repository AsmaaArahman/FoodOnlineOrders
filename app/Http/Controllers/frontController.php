<?php

namespace App\Http\Controllers;
use App\Option;
use App\Qutes;
use App\Quteddeatils;
use App\Order;
use App\Meals;
use App\Customer;
use Illuminate\Http\Request;

class frontController extends Controller
{

    
    
    public function index(Request $request)
    {
        $data = Qutes::all();
        $meals = Meals::all();
        $request->session()->flush();
        return view('allvistor.index', ['qutes'=>$data,'meals'=>$meals]);
    }


    
    public function qutes(Request $request)
    {
        $data = Qutes::all();
        $request->session()->flush();
        return view('allvistor.allqutes', ['qutes'=>$data]);
    }

    
    
    public function meals(Request $request, $id)
    {
        if($id == 1){
            $meals = Meals::where('name','فطار')->get();        
        }
        
        elseif($id == 2){
            $meals = Meals::where('name','غداء')->get();        
        }
        
        elseif($id == 3){
            $meals = Meals::where('name','عشاء')->get();        
        }
        $request->session()->flush();        
        return view('allvistor.allmeal', ['meals'=>$meals]);
    }
    


    public function handelorder_qute(Request $request, $id)
    {
            $request->session()->put('productq', $id);
        
        return view('allvistor.formuser');
    }
    


    public function handelorder_meal(Request $request, $id)
    {
            $request->session()->put('productm', $id);
        
        return view('allvistor.formuser');
    }

/*
    public function addmeal(Request $request)
    {
        return redirect('/make-order')->with('success','تم اضافة الوجبة');
    }
*/



    public function requestorder(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->input('customname');
        $customer->phone = $request->input('phone');
        $customer->addr = $request->input('address');
        $customer->email = $request->input('email');
        if($customer->save()){
            $request->session()->put('userid', $customer->id);
            $request->session()->put('number',  $request->input('number'));
            return redirect('ordermake/');
        }
    }

    public function ordermake(Request $request)
    {

        $order = new Order;
        if($request->session()->get('productm') != ''){
            $order->foroptionml = $request->session()->get('productm');
            $order->forquted = NULL;
        }else{
            $order->forquted = $request->session()->get('productq');
            $order->foroptionml = NULL;
        }
        $order->countd = $request->session()->get('number');
        $order->stat = 0;
        $order->forcustom = $request->session()->get('userid');
        $order->price = 0;
        if($order->save()){
            $request->session()->flush();
            return redirect('/')->with('success','تم ايصال طلبك وسيت م الرد عليك.');
        }     
    }


    
    public function qutesdeatails(Request $request, $id)
    {
        $qute = Qutes::find($id);
        $request->session()->flush();
        return view('allvistor.detailsqute', ['qutes'=>$qute]);
    }
}
