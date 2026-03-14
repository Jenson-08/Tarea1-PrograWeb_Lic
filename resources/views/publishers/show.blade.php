@extends('layouts.app')

@section('title', $publisher['name'])

@section('content')
<h2>{{ $publisher['name'] }}</h2>

<p class="meta">
    Country: {{ $publisher['country'] }} |
    Founded: {{ $publisher['founded'] }} |
    Genre: {{ $publisher['genere'] }}
</p>

<h3>Books</h3>
<ul>
    @foreach ($publisher['books'] as $book)
    <li>
        <a href="{{ route('books.show', $book['id']) }}">{{ $book['title'] }}</a>
    </li>
    @endforeach
</ul>

<a href="{{ route('publishers.index') }}">Back to Publishers</a>
@endsection