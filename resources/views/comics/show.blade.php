@extends('layouts.base')

@section('documentTitle')
    {{ $comic->name }}
@endsection

@section('content')
    <ul>
        @foreach ($comic->toArray() as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
@endsection