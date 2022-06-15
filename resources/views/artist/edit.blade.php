@extends('layouts.app')

@section('title', 'Modification d\un artiste')

@section('content')
    
<h2>Modifier un artiste</h2>

    <form action="{{ route('artist_update' ,$artist->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <div>
            
            <label for="art_firstname">Prénom</label>
            <input type="text" id="art_firstname" name="art_firstname" 
	       @if(old('firstname'))
                value="{{ old('firstname') }}" 
            @else
                value="{{ $artist->firstname }}" 
            @endif
	           class="@error('firstname') is-invalid @enderror">
            
	@error('firstname')
            <div class="alert alert-danger">{{ $message }} {{var_dump($_POST)}}</div>
     @enderror
        </div>

        <div>
            
            <label for="art_lastname">Nom</label>
            <input type="text" id="art_lastname" name="art_lastname" 
	       @if(old('lastname'))
                value="{{ old('lastname') }}" 
            @else
                value="{{ $artist->lastname }}" 
            @endif
	           class="@error('lastname') is-invalid @enderror">
            
	@error('lastname')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <label for="agencies_id">ID d'agence</label>
            <input type="text" id="agencies_id" name="agencies_id" 
	       @if(old('agencies_id'))
                value="{{ old('agencies_id') }}" 
            @else
                value="{{ $artist->agencies_id }}" 
            @endif
	           class="@error('agencies_id') is-invalid @enderror">

	@error('agencies_id')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button type="submit">Modifier</button>
   <a href="{{ route('artist_show',$artist->id) }}">Annuler</a>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
	   <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <nav><a href="{{ route('artist_index') }}">Retour à l'index</a></nav>
