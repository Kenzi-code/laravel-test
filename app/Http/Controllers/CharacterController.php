<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;

class CharacterController extends Controller
{
    public static function add(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->designer_id = $request->designer_id;
        $character->publication_year = $request->publication_year;
        $character->save();
        return redirect('/list');
    }

    public static function delete(Request $request)
    {
        Character::destroy($request->id);
        return redirect('/list');
    }

    public static function update(Request $request)
    {
        $character = Character::find($request->id);
        $character->name = $request->name;
        $character->designer = $request->designer_id;
        $character->publication_year = $request->publication_year;
        $character->wcf = $request->wcf;
        $character->save();
        return redirect('/list');
    }

}
