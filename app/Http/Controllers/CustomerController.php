<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
        $customers = customer::all();
        $count = customer::count();
        return view('front.customer',compact('customers','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $newcustomer = new customer();
        $req-> validate([

            'name'=>'required',
            'address'=>'required',
            'number'=>'required',
            'email'=>'required',
        ]);

     $newcustomer->name=$req->name;
 
     $newcustomer->address=$req->address;

     $newcustomer->number=$req->number;
 
     $newcustomer->email=$req->email;

     $newcustomer->order_id=1;
     
     $newcustomer->save();
 
        return redirect(route('customers.show',$newcustomer->id))->with('status','Data inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer=customer::find($id);
  
        return view("backend.customers.show",compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=customer::find($id);
        // dd($customer);
        return view("backend.customers.edit",compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req-> validate([

            'name'=>'required',
            'address'=>'required',
            'number'=>'required',
            'email'=>'required',
        ]);

           $customer=customer::find($id);
           
            $customer->name=$req->name;
        
            $customer->address=$req->address;

            $customer->number=$req->number;
        
            $customer->email=$req->email;
            $customer->order_id=1;

            $customer->save();

            return redirect(route('customers.index'))->with('status','Record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer=customer::find($id);
      $customer->delete();
      return redirect(route('customers.index'))->with('status','Record has been deleted');
    }
}
