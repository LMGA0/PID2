@extends('layouts.app')

@section('title', 'Modifier une catégorie')

@section('content')
    <h2>Modifier une catégorie</h2>

    <form action="{{ route('show.update' ,$show->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <div>
            <p>Nom du spectacle</p>
            <p> 
	       @if(old('title'))
                value="{{ old('title') }}" 
            @else
                value="{{ $show->title }}" 
            @endif
	           class="@error('title') is-invalid @enderror">
            </p>
	@error('title')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <p>Bookable</p>
            <p> 
	       @if(old('bookable'))
                value="{{ old('bookable') }}" 
            @else
                value="{{ $show->bookable }}" 
            @endif
	           class="@error('bookable') is-invalid @enderror">
            </p>
	@error('bookable')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <label for="category_id">ID de catégorie</label>
            <input type="text" id="category_id" name="category_id" 
	       @if(old('category_id'))
                value="{{ old('category_id') }}" 
            @else
                value="{{ $show->category_id }}" 
            @endif
	           class="@error('category_id') is-invalid @enderror">

	@error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button>Modifier</button>
   <a href="{{ route('show.show',$show->id) }}">Annuler</a>
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

    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection