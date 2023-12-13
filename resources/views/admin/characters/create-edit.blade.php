@extends('layouts.admin')

@section('content')
   <h1>{{ $title }}</h1>
   <div class="container">

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($method)
        <label class="form-label" for="name">Nome Personaggio</label>
        <input class="form-control" type="text" placeholder="inserisci il nome" id="name" name="name" value="{{ old("name", $character?->name) }}">

        <label class="form-label" for="height">Altezza Personaggio</label>
        <input class="form-control" type="number" placeholder="inserisci l'altezza" id="height" name="height" min="0" value="{{ old("height", $character?->height) }}">

        <label class="form-label" for="weight">Peso Personaggio</label>
        <input class="form-control" type="number" placeholder="inserisci peso" id="weight" name="weight" min="0" value="{{ old("weight", $character?->weight) }}">

        <label for="background" class="form-label">Storia del personaggio</label>
        <textarea
                rows="4" cols="50"
                class="form-control"
                id="background"
                name="background">{{ old("background", $character?->background) }}</textarea>


            <label for="image" class="form-label">Immagine del personaggio Cazzuto</label>
            <input
                    type="file"
                    {{-- onchange="showImage(event)" --}}
                    class="form-control"
                    id="image"
                    name="image"
                    value="{{old('image', $character?->image)}}">

            {{-- @error('image')
                <p class="text-danger">{{$message}}</p>
            @enderror --}}
            {{-- in caso di errore del caricamento dell'immagine carico il placeholder --}}
            {{-- <img id="thumb" width="150" onerror="this.src='/img/Placeholder.png'" src="{{ asset('storage/'. $character?->image) }}"> --}}

        <label class="form-label" for="armor_class">Classe Armatura</label>
        <input class="form-control" type="number" placeholder="Inserisci classe armatura" id="armor_class" name="armor_class" min="0"
        value="{{ old("armor_class", $character?->armor_class) }}">

        <label class="form-label" for="str">Forza</label>
        <input class="form-control" type="number" placeholder="inserisci la Forza" id="str" name="str" min="0"
        value="{{ old("str", $character?->str) }}">

        <label class="form-label" for="dex">Destrezza</label>
        <input class="form-control" type="number" placeholder="inserisci la Destrezza" id="dex" name="dex" min="0"
        value="{{ old("dex", $character?->dex) }}">

        <label class="form-label" for="con">Costituzione</label>
        <input class="form-control" type="number" placeholder="inserisci la costituzione del personaggio" id="con" name="con" min="0"
        value="{{ old("con", $character?->con) }}">

        <label class="form-label" for="int">Intelligenza</label>
        <input class="form-control" type="number" placeholder="inserisci l'intelligenza del personaggio" id="int" name="int" min="0"
        value="{{ old("int", $character?->int) }}">

        <label class="form-label" for="wis">Saggezza</label>
        <input class="form-control" type="number" placeholder="inserisci la saggezza del personaggio" id="wis" name="wis" min="0"
        value="{{ old("wis", $character?->wis) }}">

        <label class="form-label" for="cha">Carisma</label>
        <input class="form-control" type="number" placeholder="inserisci peso" id="cha" name="cha" min="0"
        value="{{ old("cha", $character?->cha) }}">


            <button class="btn btn-dark " type="submit">Aggiungi</button>
            <button class="btn btn-dark ">Reset</button>
            <button class="btn btn-dark ">Torna alla Home</button>

       </form>
   </div>

@endsection
