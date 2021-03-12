@extends('layouts.base')
@section('name', 'MAJ')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
    <h1 class="name">Edit character information</h1>
    <div>
        <form action="/updateCharacter" method="POST">
            @csrf
            <div class="form-group row">
                <input type="hidden" name="id" value="{{ $character->id }}">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ $character->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="designer" class="col-sm-2 col-form-label">Designer</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="designer" value="{{ $character->designer }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-2 col-form-label">Year of publication</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="publication_year" value="{{ $character->publication_year }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update !</button>
        </form>
    </div>
@endsection




