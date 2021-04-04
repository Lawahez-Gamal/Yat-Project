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
        return view ('backend.mail',compact('mail','count'));
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
        // new object from room model
        $newmail=new mail();

        $request-> validate([
                'mail'=>'required',
                ]);
                
                $newmail->email=$request->mail;
            
            
                $newmail->save();
                return redirect(route('frontend.mail'))->with('status','Success'); 
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(mail $mail)
    {
        //
    }
}
