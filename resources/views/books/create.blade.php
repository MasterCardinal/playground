@extends('layout')

@section('content')
    <h1>Create New Book</h1>

    <form method="post" action="/books">
        @csrf
        <input type="text" value="" name="title">
        <input type="text" value="" name="description">
        <button class="btn btn-primary" type="submit" value="ceate">Create New Book</button>
    </form>

    <hr>
    <p>
        <a class="btn btn-primary" href="/books">Home</a>
    </p>

@endsection