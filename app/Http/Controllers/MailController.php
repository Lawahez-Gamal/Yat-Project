<?php

namespace App\Http\Controllers;

use App\Models\mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail=mail::all();
        $count=mail::count();
        return view ('front.mail',compact('mail','count'));
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
      public function store(request $req)
        {
        // new object from room model
        $newmail=new mail();

        $req-> validate([
                'mail'=>'required',
                ]);
                
                $newmail->email=$req->mail;
            
            
                $newmail->save();
                return redirect(route('contacts.index'))->with('status','Success'); 
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    $mail=mail::find($id);
    return view("backend.contact.show",compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mail=mail::find($id);

        return view("backend.contact.edit",compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\req  $req
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update($req, $id)
    {
        $newmail=new mail();

        $req-> validate([
                'mail'=>'required',
                ]);
                
                $newmail->email=$req->mail;
            
            
                $newmail->save();
                return redirect(route('contacts.index'))->with('status','Success'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mail=mail::find($id);
        $mail->delete();
        return redirect(route('contacts.index'))->with('status','Record has been deleted');
    }
}
