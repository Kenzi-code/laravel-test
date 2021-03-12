@extends('layouts.base')
@section('name', 'Character')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/character.css') }}">
@endsection

@section('content')
    <h1 class="name">Character information</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $character->name }}</div>
            <div class="card-body text-dark flex">
                <p>Designer :</p>
                <p class="card-text">{{ $character->name }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>What comic from :</p>
                <p class="card-text">{{ $character->wcf }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Year of publication :</p>
                <p class="card-text">{{ $character->publication_year }}</p>
            </div>
        </div>
    </div>
@endsection
