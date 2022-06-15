@extends('layouts.app')

@section('title', 'Liste des agences')

@section('content')
    <h1>Liste des {{ $resource }}</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de l'agence</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agencies as $agencies)
            <tr>
                <td>
                    <a href="{{ route('agencies_show', $agencies->id) }}">{{ $agencies->ag_name }}</a>
                </td>
                <td>
                    <ul>
                        @foreach($agencies->artists as $artists)
                        <li>{{$artists->firstname}} {{$artists->lastname}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection