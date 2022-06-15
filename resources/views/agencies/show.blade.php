@extends('layouts.app')

@section('title', 'Fiche d\'une agence')

@section('content')
    <h1>{{ ucfirst($agencies->ag_name) }}</h1>
    
    <ul>
        @foreach($agencies->artists as $artists)
        <li>{{$artists->firstname}} {{$artists->lastname}}</li>
        <nav><a href="{{ route('artist_edit', $artists->id) }}">Modifier l'artiste</a></nav>
        @endforeach
    </ul>
    
    
    <nav><a href="{{ route('agencies_index') }}">Retour à l'index</a></nav>
@endsection

