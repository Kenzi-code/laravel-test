<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Author;


class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function list()
    {
        $characters = Character::all();
        return view('list', ['characters' => $characters]);
    }

    public function character($id)
    {
        $character = Character::getOne($id);
        return view('character', ['character' => $character]);
    }

    public function add()
    {
        $characters = Character::all()->sortBy('name');
        return view('add', ['characters' => $characters]);
    }

    public function updateCharacter($id)
    {
        $character = Character::find($id);
        return view('update', ['character' => $character]);
    }
}
