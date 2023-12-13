@extends('layouts.admin')

@section('content')
   <h1> Create and Edit</h1>
   <div class="container">

       <form action="{{route('admin.characters.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label class="form-label" for="name">Nome Personaggio</label>
        <input class="form-control" type="text" placeholder="inserisci il nome" id="name" name="name">
        @error('name')
                <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror


        <label class="form-label" for="height">Altezza Personaggio</label>
        <input class="form-control" type="number" placeholder="inserisci l'altezza" id="height" name="height" min="0">
        @error('height')
                <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror


        <label class="form-label" for="weight">Peso Personaggio</label>
        <input class="form-control" type="number" placeholder="inserisci peso" id="weight" name="weight" min="0">
        @error('weight')
                <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror


        <label for="background" class="form-label">Storia del personaggio</label>
        <textarea
                rows="4" cols="50"
                class="form-control"
                id="background"
                name="background"></textarea>
        @error('background')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror


        <label for="image" class="form-label">Immagine del personaggio Cazzuto</label>
        <input
                type="file"
                {{-- onchange="showImage(event)" --}}
                class="form-control"
                id="image"
                name="image"
                {{-- value="{{old('image', $project?->image)}}" --}}>

        @error('image')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror
        {{-- in caso di errore del caricamento dell'immagine carico il placeholder --}}
        {{-- <img id="thumb" width="150" onerror="this.src='/img/Placeholder.png'" src="{{ asset('storage/'. $character?->image) }}"> --}}

        <label class="form-label" for="armor_class">Classe Armatura</label>
        <input class="form-control" type="number" placeholder="Inserisci classe armatura" id="armor_class" name="armor_class" min="0">
        @error('armor_class')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror


        <label class="form-label" for="str">Forza</label>
        <input class="form-control" type="number" placeholder="inserisci la Forza" id="str" name="str" min="0">
        @error('str')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <label class="form-label" for="dex">Destrezza</label>
        <input class="form-control" type="number" placeholder="inserisci la Destrezza" id="dex" name="dex" min="0">
        @error('dex')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <label class="form-label" for="con">Costituzione</label>
        <input class="form-control" type="number" placeholder="inserisci la costituzione del personaggio" id="con" name="con" min="0">
        @error('con')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <label class="form-label" for="int">Intelligenza</label>
        <input class="form-control" type="number" placeholder="inserisci l'intelligenza del personaggio" id="int" name="int" min="0">
        @error('int')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <label class="form-label" for="wis">Saggezza</label>
        <input class="form-control" type="number" placeholder="inserisci la saggezza del personaggio" id="wis" name="wis" min="0">
        @error('wis')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <label class="form-label" for="cha">Carisma</label>
        <input class="form-control" type="number" placeholder="inserisci peso" id="cha" name="cha" min="0">
        @error('cha')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror


            <button class="btn btn-dark " type="submit">Aggiungi</button>
            <button class="btn btn-dark ">Reset</button>
            <button class="btn btn-dark ">Torna alla Home</button>

       </form>
   </div>

@endsection
