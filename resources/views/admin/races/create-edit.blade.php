@extends('layouts.admin')

@section('content')

    <h1>Form create-edit</h1>
    <form action="{{ $route }}" method="POST" class="px-4 bg-body-secondary">
        @csrf
        @method($method)

        {{-- NOME --}}

        <label class="form-label" for="name"><strong>Nome Personaggio</strong></label>
        <input class="form-control" type="text" placeholder="inserisci il nome" id="name" name="name" value="{{ old("name", $race?->name) }}">
        @error('name')
                <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror


        {{-- DESCRIZIONE --}}

        <label for="description" class="form-label"><strong>Descrizione della razza</strong></label>
        <textarea
                rows="4" cols="50"
                class="form-control"
                id="description"
                name="description">{{ old("description", $race?->description) }}</textarea>
        @error('description')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror


        <div class="row my-5">
            {{-- MODIFICATORE FORZA --}}
            <div class="col-2">
                <label class="form-label" for="Mod_str"><strong>Forza</strong></label>
                <input class="form-control" type="number" placeholder="inserisci la Forza" id="Mod_str" name="Mod_str" min="0"
                value="{{ old("Mod_str", $race?->Mod_str) }}">
                @error('Mod_str')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE DESTREZZA --}}
            <div class="col-2">
                <label class="form-label" for="Mod_dex"><strong>Destrezza</strong></label>
                <input class="form-control" type="number" placeholder="inserisci la Destrezza" id="Mod_dex" name="Mod_dex" min="0"
                value="{{ old("Mod_dex", $race?->Mod_dex) }}">
                @error('Mod_dex')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE COSTITUZIONE --}}
            <div class="col-2">
                <label class="form-label" for="Mod_con"><strong>Costituzione</strong></label>
                <input class="form-control" type="number" placeholder="inserisci la Costituzione" id="Mod_con" name="Mod_con" min="0"
                value="{{ old("Mod_con", $race?->Mod_con) }}">
                @error('Mod_con')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE INTELLIGGENZA --}}
            <div class="col-2">
                <label class="form-label" for="Mod_int"><strong>Intelligenza</strong></label>
                <input class="form-control" type="number" placeholder="inserisci l'Intelligenza" id="Mod_int" name="Mod_int" min="0"
                value="{{ old("Mod_int", $race?->Mod_int) }}">
                @error('Mod_int')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE SAGGEZZA --}}
            <div class="col-2">
                <label class="form-label" for="Mod_wis"><strong>Saggezza</strong></label>
                <input class="form-control" type="number" placeholder="inserisci la Saggezza" id="Mod_wis" name="Mod_wis" min="0"
                value="{{ old("Mod_wis", $race?->Mod_wis) }}">
                @error('Mod_wis')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE CARISMA --}}
            <div class="col-2">
                <label class="form-label" for="Mod_cha"><strong>Carisma</strong></label>
                <input class="form-control" type="number" placeholder="inserisci Peso" id="Mod_cha" name="Mod_cha" min="0" value="{{ old("Mod_cha", $race?->Mod_cha) }}">
                @error('Mod_cha')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>
        </div>



        <button class="btn btn-dark " type="submit">Aggiungi</button>
        <button class="btn btn-dark ">Reset</button>
        <button class="btn btn-dark ">Torna alla Home</button>

   </form>
@endsection
