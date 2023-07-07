@extends('app')
@section('title')
Les desserts
@endsection
@section('content')
@foreach ($desserts as $dessert)
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title {{ $dessert->nom }}">{{ $dessert->nom }} {{ $dessert->prix }} €</h5>
                    <button class="text-body-secondary text-muted btn" onclick="addToCart($dessert->nom, $dessert->prix)">Ajouter au
                        pannier</button>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <img src= "data:image/jpeg;base64,{{base64_encode( $dessert->image) }} " class="img-fluid rounded-start" alt="...">
            </div>
        </div>
    </div>
    <br>
@endforeach
@endsection
