@extends('crud.master')

@section('content')
<div class="container mt-5">
    {{-- <div class="text-center"><a class="btn btn-primary mt-4" href="{{ url('users/create') }}" >Créer un profil</a></div> --}}
    <div class="row">
        @foreach ($users as $user)
        <div class="col-sm-4">
            <div class="card mt-5 mb-5" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">{{ $user->name }}</h5>
                  <p class="card-text">{{ $user->email }}</p>
                  @if($user->id == Auth::user()->id)
                  <a class="btn btn-primary float-right mt-4" href="{{ url('users/edit/'.$user->id) }}" >Modifier</a>
                  @endif
                </div>
              </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
