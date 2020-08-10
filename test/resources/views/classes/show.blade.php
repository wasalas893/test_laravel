@extends('layouts.app')


@section('content')
<a href="/classes" class="btn btn-primary">Go Back</a>

<h1>{{$class->Subject}}</h1>  


  <hr>
<small>Written on {{$class->created_at}}</small>
 <hr>
<a href="/classes/{{$class->id}}/edit" class="btn btn-default">class Edit</a>



<form action="{{ action('ClassesController@destroy',[$class->id]) }}" method="POST" class="pull-right">
  {{ csrf_field() }}

 


  <!--aniwarenma demiya utuya-->
  <input type="hidden" name="_method" value="DELETE">


  
  <!-- Add Task Button -->
  <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-danger">
              <i class="fa fa-plus"></i> Delete
          </button>
      </div>
  </div>
</form>
   
    
@endsection