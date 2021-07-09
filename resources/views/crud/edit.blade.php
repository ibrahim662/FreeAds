@extends('crud.master')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ url('users/edit/'.$users->id) }}">
        @csrf
        <div class="form-group">
          <label>Titre de la tâche</label>
          <input type="text" class="form-control" name="name" value="{{ $users->name }}">
        </div>
        <div class="form-group">
          <label>email</label>
          <input type="text" rows="4" class="form-control" name="email" value="{{ $users->email }}">
        </div>
        <div class="form-group">
          <label>mot de passe</label>
          <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
    <form action="{{ url('users/delete/'.$users->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <button class="btn btn-danger mb-4 mr-4 float-right" type="submit">Supprimer</button>
    </form>
</div>

@endsection
