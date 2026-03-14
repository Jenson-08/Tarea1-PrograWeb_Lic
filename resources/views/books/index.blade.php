@extends('layouts.app')

@section('title', 'Books')

@section('content')
<h2>Books Information</h2>
<p>This section presents information about books.</p>

<ul>
    @foreach ($books as $book)
    <li>
        <a href="{{ route('books.show', $book['id']) }}">{{ $book['title'] }}</a>
    </li>
    @endforeach
</ul>
@endsection