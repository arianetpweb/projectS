@extends('app')
@section('title')
boissons
@endsection
@section('content')
@foreach ($boissons as $boisson)
    <p>{{ $boisson->nom }}      </p>
    <hr>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title {{ $boisson->nom }}">{{ $boisson->nom }} {{ $boisson->prix }} €</h5>
                    <button class="text-body-secondary text-muted btn" onclick="addToCart($boisson->nom, $boisson->prix)">Ajouter au
                        pannier</button>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <img src= "data:image/jpeg;base64,{{base64_encode( $boisson->image) }} " class="img-fluid rounded-start" alt="...">
            </div>
        </div>
@endforeach
@endsection
