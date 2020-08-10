<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Classes;

class ClassesController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes=Classes::orderBy('created_at','desc')->get();  
        


        return view('classes.index')->with('classes',$classes);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classes.create');
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
            'Grade'=> 'required',
            'Subject'=>'required',
            'Teacher'=>'required'

        ]);
        //create post database
        $class=new Classes;
        $class->Grade=$request->input('Grade');
        $class->Subject=$request->input('Subject');
        $class->Teacher=$request->input('Teacher');
        $class->user_id=auth()->user()->id;
        $class->save();

   return redirect('/classes')->with('success','Class created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class=Classes::find($id);
        return view('classes.show')->with('class',$class);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class=Classes::find($id);
        return view('classes.edit')->with('class',$class);
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
        $this->validate($request,[
            'Grade'=> 'required',
            'Subject'=>'required',
            'Teacher'=>'required'

        ]);
        //create post database
        $class=Classes::find($id);
        $class->Grade=$request->input('Grade');
        $class->Subject=$request->input('Subject');
        $class->Teacher=$request->input('Teacher');
       
        $class->save();

   return redirect('/classes')->with('success','Classes Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class=Classes::find($id);
        $class->delete();
        return redirect('/classes')->with('success','Classes Deleted');
    }
}
