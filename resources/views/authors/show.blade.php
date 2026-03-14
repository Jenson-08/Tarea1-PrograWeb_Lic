@extends('layouts.app')

@section('title', $author['name'])

@section('content')
<h2>{{ $author['name'] }}</h2>

<p class="meta">
    Nationality: {{ $author['nationality'] }} |
    Birth year: {{ $author['birth_year'] }} |
    Fields: {{ $author['fields'] }}
</p>

<h3>Books</h3>
<ul>
    @foreach ($author['books'] as $book)
    <li>
        <a href="{{ route('books.show', $book['id']) }}">{{ $book['title'] }}</a>
    </li>
    @endforeach
</ul>

<a href="{{ route('authors.index') }}">Back to Authors</a>
@endsection