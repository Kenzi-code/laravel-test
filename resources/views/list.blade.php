@extends('layouts.base')
@section('name', 'Characters')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/list.css') }}">
@endsection

@section('content')
    <h1 class="name">List of characters</h1>
    <div class="list">
        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designer</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($characters as $character)
                <tr>
                    <th scope="row">{{ $character->id }}</th>
                    <td><a href="/character/{{ $character->id }}">{{ $character->name }}</a></td>
                    <td>{{ $character->name }}</td>
                    <td><a class="btn btn-info" href="/updateCharacter/{{ $character->id }}"></a></td>
                    <td>
                        <form action="/deleteCharacter" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $character->id }}">
                            <input type="submit" class="btn btn-danger" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
