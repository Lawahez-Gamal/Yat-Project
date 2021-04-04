<?php

namespace App\Http\Controllers;

use App\Models\Mymeal;
use Illuminate\Http\Request;

class MymealController extends Controller
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
        $Mymeals = Mymeal::all();
        $count = Mymeal::count();
        return view('front.items',compact('Mymeals','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $newMymeal = new Mymeal();
        $req-> validate([

            'name'=>'required',
            'description'=>'required',
 
            'img'=>'image | mimes:jpg,png,bmg,jif,jpeg'
        ]);
 
       $imag=$req->img;
 
       if($req->hasFile('img')){
        $imgName=time().'.'.$imag->extension();
 
        $imag->move(public_path('images'),$imgName);
 
     }
 
     else{
         $imgName='Noimg.png';
     }
 
     
     $newMymeal->name=$req->name;
 
     $newMymeal->description=$req->description;
 
     $newMymeal->image='/images'.'/'.$imgName;
     $newMymeal->category_id=1;
     $newMymeal->save();
 
        return redirect(route('meals.show',$newMymeal->id))->with('status','Data inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mymeal  $Mymeal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Mymeal=Mymeal::find($id);
       
        // $user= Mymeal::find($id)->user;
  
        return view("backend.items.show",compact('Mymeal'));
        // return view("backend.items.show",compact('Mymeal','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mymeal  $Mymeal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mymeal=Mymeal::find($id);
        // dd($Mymeal);
        return view("backend.items.edit",compact('Mymeal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mymeal  $Mymeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req-> validate([
            'name'=>'required',
            'description'=>'required',
 
            'img'=>'image | mimes:jpg,png,bmg,jif,jpeg'
        ]);
    //   dd($req->all());
            $imag=$req->img;
        
            if($req->hasFile('img')){
            $imgName=time().'.'.$imag->extension();

            $imag->move(public_path('images'),$imgName);

            }

            else{
                $imgName='Noimg.png';
            }
            
            $Mymeal=Mymeal::find($id);

            $Mymeal->name=$req->name;
 
            $Mymeal->description=$req->description;
 
            $Mymeal->image='/images'.'/'.$imgName;
    
            $Mymeal->save();
            return redirect(route('meals.index'))->with('status','Record has been updated'); 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mymeal  $Mymeal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Mymeal=Mymeal::find($id);
      $Mymeal->delete();
      return redirect(route('meals.index'))->with('status','Record has been deleted');
    }
}
