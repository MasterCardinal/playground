@extends('layouts.app')

@section('content')
    <h1>Show All Books</h1>
    <h2>{{ $company->companyname  }}</h2>

    <p>
        Street: {{ $company->companystreet }}<br>
        House number: {{ $company->companyhousenumber }}<br/>
        City: {{ $company->companycity }}<br/>
        ZIP: {{ $company->companyzip }}<br/>
        Country: {{ $company->companycountry }}
    <form method="post" action="/company/{{ $company->id }}/edit">
        @csrf
        <button class="btn btn-primary" type="submit" value="edit">Edit</button>
    </form>
    </p>

    <form method="post" action="/company/{{ $company->id }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">delete company</button>
    </form>

    <p>
        <a class="btn btn-primary" href="/company">Home</a>
    </p>

@endsection