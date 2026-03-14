@extends('layouts.app')

@section('title', 'Authors')

@section('content')
<h2>Authors Information</h2>
<p>This section presents information about authors.</p>

<ul>
    @foreach ($authors as $author)
    <li>
        <a href="{{ route('authors.show', $author['id']) }}">{{ $author['name'] }}</a>
    </li>
    @endforeach
</ul>
@endsection