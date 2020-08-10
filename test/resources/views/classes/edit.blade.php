@extends('layouts.app')


@section('content')

<h1>Edit class</h1>
<form action="{{ action('ClassesController@update',[$class->id]) }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Grade</label>

        <div class="col-sm-6">
        
        <input type="text"  name="Grade" value="{{$class->Grade}}"  id="task-name" class="form-control">
           
        </div>
    </div>
    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Subject</label>

        <div class="col-sm-6">
        <input type="text" name="Subject" value="{{$class->Subject}}" id="task-name" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Teacher</label>

        <div class="col-sm-6">
        <input type="text" name="Teacher" value="{{$class->Teacher}}" id="task-name" class="form-control">
        </div>
    </div>


    <!--aniwarenma demiya utuya-->
    <input type="hidden" name="_method" value="PUT">


    
    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Submit
            </button>
        </div>
    </div>
</form>
       
 
   


@endsection