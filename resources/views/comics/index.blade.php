@extends('layouts.base')

@section('documentTitle')
    INDEX
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">author</th>
                <th scope="col">genre</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->name }}</td>
                <td>{{ $comic->author }}</td>
                <td>{{ $comic->genre }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->description }}</td>
                <td><a class="btn btn-default" href="{{route("comics.show", $comic)}}">view</a> <a class="btn btn-primary" href="{{route("comics.edit", $comic)}}">edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection