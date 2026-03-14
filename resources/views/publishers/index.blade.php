@extends('layouts.app')

@section('title', 'Publishers')

@section('content')
<h2>Publishers Information</h2>
<p>This section presents information about publishers.</p>

<ul>
    @foreach ($publishers as $publisher)
    <li>
        <a href="{{ route('publishers.show', $publisher['id']) }}">{{ $publisher['name'] }}</a>
    </li>
    @endforeach
</ul>
@endsection