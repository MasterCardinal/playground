@extends('layout')

@section('content')
    <h1>Show Selected Books</h1>
    <h2>{{ $book->title }}</h2>

    <p>
        Description: {{ $book->description }}
    <form method="post" action="/book/{{ $book->id }}/edit">
        @csrf
        <button class="btn btn-primary" type="submit" value="edit">Edit this book</button>
    </form>
    </p>

    <form method="post" action="/book/{{ $book->id }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">delete this book</button>
    </form>

    <p>
        <a class="btn btn-primary" href="/books">Home</a>
    </p>

@endsection