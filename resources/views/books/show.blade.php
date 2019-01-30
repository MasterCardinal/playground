@extends('layout')

@section('content')
    <h1>Show Selected Books</h1>
    <h2>{{ $book->title }}</h2>

    <p>
        Description: {{ $book->description }}
    </p>
    <p><a href="/books/{{ $book->id }}/edit">Edit</a></p>

    <form method="post" action="/books/{{ $book->id }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">delete this book</button>
    </form>

    <p>
        <a class="btn btn-primary" href="/books">Home</a>
    </p>

@endsection