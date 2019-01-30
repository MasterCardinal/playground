@extends('layout')

@section('content')
    <h1>Edit Book Details</h1>
    <h2>{{ $book->title  }}</h2>


    <form method="post" action="/books/{{ $book->id }}">
        @csrf
        @method('PATCH')
        <label>Book Title</label>
        <input type="text" name="title" value="{{ $book->title }}"><br>
        <label>Book Description</label>
        <input type="text" name="description" value="{{ $book->description }}"><br>
        <button class="btn btn-primary" type="submit" value="save">Save</button>
    </form>

@endsection