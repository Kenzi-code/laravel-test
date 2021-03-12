@extends('layouts.base')
@section('name', 'Characters')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
    <h1 class="name">Add a character</h1>
    <div>
        <form action="/addCharacter" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Name" value="lala">
                </div>
            </div>
            <div class="form-group row">
                <label for="character" class="col-sm-2 col-form-label">Designer</label>
                <div class="col-sm-10">
                    <select class="form-control" name="character_id" id="">
                        @foreach($characters as $character)
                            <option value="{{ $character->id }}">{{ $character->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="wcf" class="col-sm-2 col-form-label">What comic from</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="wcf" placeholder="Name of the comic" value="lala">
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-2 col-form-label">Year of publication</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="publication_year" placeholder="Year of publication" value="2000">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add !</button>
        </form>
    </div>
@endsection




