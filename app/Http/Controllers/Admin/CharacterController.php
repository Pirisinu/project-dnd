<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::paginate(20);

        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Inserimento nuovo personaggio";
        $method = "POST";
        $route = route("admin.characters.store");
        $character = null;
        return view('admin.characters.create-edit', compact("title", "method", "route", "character"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data_character = $request->all();

        $form_data_character['slug'] = Character::generateSlug($form_data_character['name']);

        //se esiste la chiave image salvo l'immagine nel file system e nel database
        if(array_key_exists('image',$form_data_character)){
            //prima di salvare il file prendo il nome del file per salvarlo nel db
            /* $form_data_character['image_original_name'] = $request->file('image')->getClientOriginalName(); */
            //salvo il file nello storage rinominandolo
            $form_data_character['image']  = Storage::put('uploads',$form_data_character['image']);
        }


        $new_character= Character::create($form_data_character);

        return redirect()->route('admin.characters.show', $new_character);

    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('admin.characters.show',compact('character'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        $title = "Modifica personaggio";
        $method = "PUT";
        $route = route("admin.characters.update", $character);
        return view('admin.characters.create-edit', compact("title", "method", "route", "character"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        $form_data_character = $request->all();
        if($form_data_character["name"] != $character->name){
            $form_data_character["slug"] = Character::generateSlug($form_data_character['name']);
        }else{
            $form_data_character["slug"] = $character->slug;
        }

        if(array_key_exists('image',$form_data_character)){
            if($character->image){
                Storage::disk("public")->delete($character->image);
            }

            $form_data_character['image']  = Storage::put('uploads',$form_data_character['image']);
        }

        $character->update($form_data_character);
        return redirect()->route('admin.characters.show', $character);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
