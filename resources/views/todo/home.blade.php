@extends('layout.app')
@section('body')
    <br>
    <div class="col-lg-4 col-lg-offset-4">
    <a href="todo/create" class="btn btn-info">Add new</a>
        <center><h1>Todo list</h1></center>
        <ul class="list-group">
        @foreach($todos as $todo)
            <li class="list-group-item">
                <a href="/todo/{{ $todo->id }}"> {{ $todo->title }} </a>
                <span class="pull-right">{{ $todo->created_at->diffforHumans() }}</span>
            </li>
        @endforeach
        </ul>
    </div>
@endsection