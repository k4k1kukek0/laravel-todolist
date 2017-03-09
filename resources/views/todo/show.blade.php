@extends('layout.master')

@section('body')
    <br>
    <div> 
        <ul>
                <h1>{{ $todo->title }}</h1> 
                <p>{{ $todo->body }}</p>
        </ul>
    </div>
@endsection