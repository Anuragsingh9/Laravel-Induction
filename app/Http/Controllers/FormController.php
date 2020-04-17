<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use Storage;
use File;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show=Form::get();
        return view('show' , compact('show'));

    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('form'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|regex:/^[\pL\s\-]+$/u|min:8|max:20| ',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:8|max:20|alpha_num',
            'password' => [
            'required',
            'string',
            'min:10',             // must be at least 10 characters in length
            'regex:/[a-z]/',      // must contain at least one lowercase letter
            'regex:/[A-Z]/',      // must contain at least one uppercase letter
            'regex:/[0-9]/',      // must contain at least one digit
            'regex:/[@$!%*#?&]/', // must contain a special character
        ],
            'comments' => 'required'
        ],[
            'name.required' => ' The  name field is required.',
            'name.min' => ' The  name must be at least 8 characters.',
            'name.max' => ' The  name may not be greater than 35 characters.',
            
        ]);

        $insert= new Form([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'password'=> $request->get('password'),
            'gender'=> $request->get('gender'),
            'comments'=> $request->get('comments')
        ]);
            
        $insert->save();
        // return view('form')->back()->with('successs', 'Profile updated!');
        return redirect()->back()->with('successs', 'Profile Added Successfully!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $Edit = Form::where('id','=', $request->id)->first();
        return view('specific' , compact('Edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        // edit a particular resource

        $Edit = Form::where('id','=', $request->id)->first();
        return view('edit' , compact('Edit'));

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
        
            $student=Form::find($id);
            $student->name = $request->get('name');
            $student->email = $request->get('email');
            $student->password = $request->get('password');
            $student->gender = $request->get('gender');
            $student->comments = $request->get('comments');
            $student->save();
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Form::where('id','=',$id)->delete();
        return redirect()->back();


    }
}
