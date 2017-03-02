@extends('layout.app')

@section('body')
    <br>
    <div class="col-lg-offset-4 col-lg-4"> 
        <h1>{{ $todo->title }}</h1> 
        <p>{{ $todo->body }}</p>
    </div>
@endsection