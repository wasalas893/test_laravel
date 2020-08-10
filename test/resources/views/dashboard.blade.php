@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                 
                
                <div class="panel-body">
                    <a href="/classes/create" class="btn btn-primary">Create Classes</a>
                </div>
                <h1>Your Classes</h1>
                <table class="table">
                    <thead class="thead-dark">
                      <th scope="col">Subject</th>
                     
                        
                    </thead>
                    @if (count($classes)>0)
                  @foreach ($classes as $class)
                    <tbody>
                      <tr>
                          <td scope="col" >{{$class->Subject}}</td>
                          <td><a href="/classes/{{$class->id}}/edit" class="btn btn-default">class Edit</a></td>
                          
                        </tr>
                  
                    </tbody>
                    
                    @endforeach
                  @else
                  <p>No Class Found</p>
                  
                  @endif
                  
                  </table>
                 
                
           





            </div>
        </div>
    </div>
</div>
@endsection
