@extends('layouts.app')

@section('title', $book['title'])

@section('content')
<h2>{{ $book['title'] }}</h2>

<p class="meta">
    Edition: {{ $book['edition'] }} |
    Copyright: {{ $book['copyright'] }} |
    Language: {{ $book['language'] }} |
    Pages: {{ $book['pages'] }}
</p>

<p>
    Author: <a href="{{ route('authors.show', $book['author_id']) }}">{{ $book['author'] }}</a>
</p>
<p>
    Publisher: <a href="{{ route('publishers.show', $book['publisher_id']) }}">{{ $book['publisher'] }}</a>
</p>

<a href="{{ route('books.index') }}">Back to Books</a>
@endsection