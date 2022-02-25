@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('comics.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <label for="author" class="col-sm-2 col-form-label">author</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                    @error('author')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div><div class="mb-3 row">
                    <label for="genre" class="col-sm-2 col-form-label">genre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genre" name="genre">
                    </div>
                    @error('genre')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div><div class="mb-3 row">
                    <label for="price" class="col-sm-2 col-form-label">price</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    @error('price')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div><div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    @error('description')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <input class="btn btn-primary" type="submit" value="invia">
            </form>
        </div>
    </div>
</div>
@endsection