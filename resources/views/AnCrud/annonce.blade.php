
@extends('AnCrud.master')
@section('content')

<div class="container mt-5">
  <form action="{{ route('search') }}" method="GET">
    <div>
    <input type="text" name="search" placeholder = "Rechercher une annonce"required style="border-radius: 5px" />
    <button type="submit">
      <img class="index_img" src="{{asset('search.png')}}" style="border-radius: 5px;", width="40px";>
      </button>
    </div>
</form>
    <div class="text-center"><a class="btn btn-primary mt-4" href="{{ url('annonces/create') }}" >Créer une annonce</a></div>
    <div class="row">
        @foreach ($annonces as $annonce)
        <div class="col-sm-4">
            <div class="card mt-5 mb-5" style="width: 18rem;">
                <div class="card-body">
                    @if($annonce->create_by == Auth::user()->id)
                  <h3> Publié par {{Auth::user()->name}}</h3>
                  @endif
                  <h4 class="card-title text-center">{{ $annonce->title }}</h4>
                  <p class="card-text">{{ $annonce->description }}</p>
                  <p class="card-text"> 
                    <img class="col" src="{{ $annonce->picture1 }}" alt="image annonce">
                 </p>
                  @if($annonce->picture2 != NULL)
                  <p class="card-text">
                    <img class="col" src="{{ $annonce->picture2 }}" alt="image annonce">
                 </p>
                  @endif
                  @if($annonce->picture3 != NULL)
                  <p class="card-text">
                    <img class="col" src="{{ $annonce->picture3 }}" alt="image annonce">
                 </p>
                  @endif
                  <p class="card-text">{{ $annonce->price }} €</p>
                  @if($annonce->create_by == Auth::user()->id)
                  <a class="btn btn-primary float-right mt-4" href="{{ url('annonces/edit/'.$annonce->id) }}" >Modifie</a>
                  @endif             
                </div>
              </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
