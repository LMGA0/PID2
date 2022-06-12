@extends('layouts.app')

@section('title', 'Liste des catégories')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <ul>
        @foreach($category as $categories)
            <li>{{$categories->category}}</li>
            @foreach($category->shows as $show)
                @if($show->category_id)
                <li>{{$show->title}}</li>
                @endif
            @endforeach
        @endforeach
    </ul>
@endsection
