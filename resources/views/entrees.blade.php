@extends('app')
@section('title')
Les entrées
@endsection
@section('content')
@foreach ($entrees as $entree)
    <p>{{ $entree->nom }}      </p>
    <hr>
@endforeach
@endsection
