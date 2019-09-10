@extends('layouts.app')

@section('title')
    {{$todo->name}}
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Task Title: {{$todo->name}}</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        <p class="h3"> Details</p>
                    </div>
                    <div class="card-body">
                        <p class="text-justify"> {{$todo->description}}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/todos/{{$todo->id}}/edit" class="btn btn-info "> Edit</a>
                        <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger"> Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
