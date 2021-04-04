<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(["index","show"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::all();
        $count = order::count();
        return view('front.reservation',compact('orders','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $neworder = new order();
        $req-> validate([

            'time'=>'required',
            'status'=>'required',
        ]);

     $neworder->time=$req->time;
 
     $neworder->status=$req->status;

     $neworder->menu_id=1;
     
     $neworder->save();
 
        return redirect(route('orders.show',$neworder->id))->with('status','Data inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=order::find($id);
  
        return view("backend.orders.show",compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=order::find($id);

        return view("backend.orders.edit",compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req-> validate([

            'time'=>'required',
            'status'=>'required',
        ]);

           $order=order::find($id);
           
            $order->time=$req->time;
        
            $order->status=$req->status;

            $order->menu_id=1;

            $order->save();

            return redirect(route('orders.index'))->with('status','Record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=order::find($id);
        $order->delete();
        return redirect(route('orders.index'))->with('status','Record has been deleted');
    }
}
