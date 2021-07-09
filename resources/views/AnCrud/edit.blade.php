@extends('AnCrud.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('annonces/edit/'.$annonces->id) }}">
        @csrf
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="title" value="{{ $annonces->title }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{ $annonces->description }}">
        </div>
        <div class="form-group">
            <label>picture1</label>
            <input type="url" class="form-control" name="picture1" value="{{ $annonces->picture1 }}">
        </div>
        <div class="form-group">
            <label>picture2</label>
            <input type="url" class="form-control" name="picture2" value="{{ $annonces->picture2 }}">
        </div>
        <div class="form-group">
            <label>picture3</label>
            <input type="url" class="form-control" name="picture3" value="{{ $annonces->picture3 }}">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="{{ $annonces->price }}">
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
    <form action="{{ url('annonces/delete/'.$annonces->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <button class="btn btn-danger mb-4 mr-4 float-right" type="submit">Supprimer</button>
    </form>
</div>

@endsection
