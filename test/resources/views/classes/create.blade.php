@extends('layouts.app')


@section('content')
<h1>Create Class</h1>
<form action="{{ action('ClassesController@store') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Grade</label>

        <div class="col-sm-6">
            <input type="text" name="Grade" id="task-name" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Subject</label>

        <div class="col-sm-6">
            <input type="text" name="Subject" id="task-name" class="form-control">
        </div>
    </div>
    <!-- Task Name -->
    <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Teacher</label>

        <div class="col-sm-6">
            <input type="text" name="Teacher" id="task-name" class="form-control">
        </div>
    </div>

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