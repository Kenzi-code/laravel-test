@extends('layouts.layouts')

@section('name', 'Form')

@section('content')
    <h1 class="name">Could you fill out this form ?</h1>

    <form action="clientInfo" method="get">
        <label for=""></label>
        <input type="text">
    </form>
@endsection