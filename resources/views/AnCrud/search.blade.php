
@extends('AnCrud.master')
@section('content')
<div class="container mt-5">
    <div class="row">
        @if($annonces->isNotEmpty())
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
    @else 
    <h2>Oups, Aucun résultat trouvé !</h2>
    @endif
</div>
</div>

@endsection