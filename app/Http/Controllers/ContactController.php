<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $contact=contact::all();

        $count=contact::count();

        return view ('front.contact',compact('contact','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\req  $req
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $newcontact=new contact();

        $req-> validate([
           'name'=>'required',
           'email'=>'required',
           'subject'=>'required | max:300',
           ]);

           $newcontact->full_name=$req->name;

           $newcontact->email=$req->email;

           $newcontact->message=$req->message;

           $newcontact->subject=$req->subject;
     
           $newcontact->save();

           return redirect(route('contacts.index',$newcontact->id))->with('status','Data inserted Successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact=contact::find($id);
  
        return view("backend.contact.show",compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=contact::find($id);

        return view("backend.contact.edit",compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\req  $req
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update($req, $id)
    {
        $req-> validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
            'subject'=>'required | max:300',
            ]);
 
            $contact=contact::find($id);

            $contact->name=$req->name;
 
            $contact->email=$req->email;
 
            $contact->message=$req->message;
 
            $contact->subject=$req->subject;
      
            $contact->save();
 
            return redirect(route('contacts.index'))->with('status','Data inserted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=contact::find($id);
        $contact->delete();
        return redirect(route('contacts.index'))->with('status','Record has been deleted');
    }
}
