@extends('AnCrud.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('annonces/create') }}">
@csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label>picture</label>
            <input type="url" class="form-control" name="picture1">
        </div>
        <div class="form-group">
            <label>picture2</label>
            <input type="url" class="form-control" name="picture2">
        </div>
        <div class="form-group">
            <label>picture3</label>
            <input type="url" class="form-control" name="picture3">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <input type="hidden" name="create_by" value={{Auth::user()->id}}>
        <button type="submit" class="btn btn-primary float-right">Créer</button>
    </form>
</div>

@endsection
