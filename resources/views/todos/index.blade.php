@extends('layouts.app')

@section('title')
    Todo List
    @endsection
@section('content')
    <h1 class="text-center my-4">TODOS PAGE</h1>
    <div class="container">
<div class="row justify-content-center">
   <div class="col-md-8">
       <div class="card card-default">
           <div class="card-header">
               Todos
           </div>
           <div class="card-body">
               <ul class="list-group">
                   @foreach($todos as $todo)
                       <li class="list-group-item">
                           {{$todo->name}}

                           <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm float-sm-right mr-1">Delete</a>
                           <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-sm-right mr-1">View</a>

                           @if(!$todo->completed)
                               <a href="/todos/{{$todo->id}}/completed" class="btn btn-success btn-sm float-sm-right mr-1">Done</a>
                               @else
                               <a href="/todos/{{$todo->id}}/notcompleted" class="btn btn-info btn-sm float-sm-right mr-1">Undo</a>

                           @endif


                       </li>
                   @endforeach
               </ul>
           </div>
       </div>
   </div>

</div>
</div>
    @endsection
