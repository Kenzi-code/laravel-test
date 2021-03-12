@extends('layouts.layouts')

@section('name','All characters')

@section('content')
    <h1 class="name">List of characters</h1>
    <div class="list">
        <table class="tab">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allCharacters as $actualCharacter)
                    <tr>
                        <th scope="row"><a href="/character/{{ $actualCharacter->id}}">{{ $actualCharacter->id}}</a></th>
                        <th scope="row"><a href="/character/{{ $actualCharacter->id}}">{{ $actualCharacter->name}}</a></th>
                        <th scope="row"><a href="/character/{{ $actualCharacter->id}}">{{ $actualCharacter->designer}}</a></th>
                        <th scope="row"><a href="/character/{{ $actualCharacter->id}}">{{ $actualCharacter->genre}}</a></th>
                        <th scope="row"><a href="/delete/{{ $actualCharacter->id}}"><button>Supprimer</button></a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
@endsection