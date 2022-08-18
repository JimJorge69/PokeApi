<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Character::all();
    }

    public function store(Request $request){

        $name=strtoupper($request->input('name'));
        $clan=strtoupper($request->input('clan'));
        $village=strtoupper($request->input('village'));
        $jutsu=strtoupper($request->input('jutsu'));

        if(!$name||!$clan||!$village||!$jutsu){
            return response()->json(['error' => 'faltan datos para poder registrar el personaje'], 400);
        }

        $character=new Character();
        $character->name=$name;
        $character->clan=$clan;
        $character->village=$village;
        $character->jutsu=$jutsu;
        $character->save();
        return $character;
    }
}
