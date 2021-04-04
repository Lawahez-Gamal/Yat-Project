<?php

namespace App\Http\Controllers;

use App\Models\reciepe;
use Illuminate\Http\Request;

class ReciepeController extends Controller
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
        $reciepes = reciepe::all();
        $count = reciepe::count();
        return view('front.reciepes',compact('reciepes','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.reciepes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $newreciepe = new reciepe();
        $req-> validate([

            'name'=>'required',
            'ingredient'=>'required',
            'instructions'=>'required',
           
        ]);
     
     $newreciepe->name=$req->name;
 
     $newreciepe->ingredient=$req->ingredient;
 
     $newreciepe->instructions=$req->instructions;

     $newreciepe->menu_id=1;

     $newreciepe->save();
 
        return redirect(route('reciepes.show',$newreciepe->id))->with('status','Data inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reciepe  $reciepe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reciepe=reciepe::find($id);
  
        return view("backend.reciepes.show",compact('reciepe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reciepe  $reciepe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reciepe=reciepe::find($id);
        
        return view("backend.reciepes.edit",compact('reciepe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reciepe  $reciepe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req-> validate([

            'name'=>'required',
            'ingredient'=>'required',
            'instructions'=>'required',
           
        ]);
    
            $reciepe=reciepe::find($id);

            $newreciepe->name=$req->name;
 
            $newreciepe->ingredient=$req->ingredient;
        
            $newreciepe->instructions=$req->instructions;

            $newreciepe->menu_id=1;
    
            $reciepe->save();

            return redirect(route('reciepes.index'))->with('status','Record has been updated'); 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reciepe  $reciepe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $reciepe=reciepe::find($id);
      $reciepe->delete();
      return redirect(route('reciepes.index'))->with('status','Record has been deleted');
    }
}
