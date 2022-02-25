@extends('layouts.base')

@section('documentTitle')
    INDEX
@endsection

@section('content')
    @if (session('status'))
        <div class="alert">
            {{session('status')}}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">author</th>
                <th scope="col">genre</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th colspan="3">action</th>
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
                <td><a class="btn btn-default" href="{{route("comics.show", $comic->id)}}">view</a></td>
                <td><a class="btn btn-primary" href="{{route("comics.edit", $comic->id)}}">edit</a></td>
                <td>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="delete">
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection