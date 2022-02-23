@extends('layouts.base')

@section('documentTitle')
    
@endsection

@section('content')
<form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
        </div>
    </div>
</form>
@endsection