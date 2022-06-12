@extends('layouts.app')

@section('title', 'Liste des catégories de spectacle')

@section('content')
    <article>
    <h1>Liste des catégories</h1>
    <ul>
        @foreach($category as $categories)
        <li>{{$categories->category}}</li>
        <ul>
            @foreach($category->shows as $show)
            <li>{{$show->title}}</li>
            @endforeach
        </ul>
        @endforeach

    </ul>
    </article>
    
    


    <nav><a href="{{ route('category_index') }}">Retour à l'index</a></nav>
@endsection

