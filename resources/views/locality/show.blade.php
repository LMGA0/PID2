@extends('layouts.app')

@section('title', 'Localité d\'un artiste')

@section('content')
    <h1>{{ $locality->locality }} {{ $locality->postal_code }}</h1>
    <nav><a href="{{ route('locality_index') }}">Retour à l'index</a></nav>
@endsection

