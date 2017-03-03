@extends('todo.create')

@section('editId', $todo->id)
@section('editTitle', $todo->title)
@section('editBody', $todo->body)
@section('editMethod')
    {{ method_field('PUT') }}
@endsection