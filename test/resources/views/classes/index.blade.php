@extends('layouts.app')


@section('content')



<h1>Class Table</h1>



<table class="table">
  <thead class="thead-dark">
    <th scope="col">Subject</th>
    <th scope="col">Grade</th>
      
      <th scope="col">Teacher</th>
      <th scope="col">Time And Date </th>
  </thead>
  @if (count($classes)>0)
@foreach ($classes as $class)
  <tbody>
    <tr>
        <td scope="col" > <a href="/classes/{{$class->id}}">{{$class->Subject}}</a></td>
        <td scope="col">{{$class->Grade}}</td> 
        <td scope="col">{{$class->Teacher}}</td>
        <td scope="col">{{$class->created_at}}</td>
      </tr>

  </tbody>
  
  @endforeach
@else
<p>No Class Found</p>

@endif

</table> 
  


@endsection