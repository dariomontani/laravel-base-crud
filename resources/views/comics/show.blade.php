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
    <a class="btn btn-primary" href="{{url()->previous()}}">back</a>
@endsection