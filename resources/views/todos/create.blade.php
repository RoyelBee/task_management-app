@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form   action="/store-todos" method="POST" class=" my-3">
        @csrf
               <div class="card card-default">
                   <div class="card-header">Create New Todo </div>
                   <div class="card-body">
                       <div class="row justify-content-center">
                           <div class="col-md-12">
                               <div class="form-group">
                                   <input type="text" class="form-control" name="name" placeholder="Enter Task Name">
                               </div>
                               <div class="form-group">
                                   <textarea rows="7" cols="10" name="description" class="form-control" placeholder="Describe task here..."></textarea>
                               </div>
                               <div class="form-group text-center">
                                   <input type="submit" name="save" value="Add Task" class="btn btn-primary ">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
    </form>

    @endsection
