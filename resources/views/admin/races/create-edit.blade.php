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
                <label class="form-label" for="mod_str"><strong>Forza</strong></label>
                <input class="form-control" type="number" placeholder="inserisci la Forza" id="mod_str" name="mod_str"
                value="{{ old("mod_str", $race?->mod_str) }}">
                @error('mod_str')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE DESTREZZA --}}
            <div class="col-2">
                <label class="form-label" for="mod_dex"><strong>Destrezza</strong></label>
                <input class="form-control" type="number" placeholder="inserisci la Destrezza" id="mod_dex" name="mod_dex"
                value="{{ old("mod_dex", $race?->mod_dex) }}">
                @error('mod_dex')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE COSTITUZIONE --}}
            <div class="col-2">
                <label class="form-label" for="mod_con"><strong>Costituzione</strong></label>
                <input class="form-control" type="number" placeholder="inserisci la Costituzione" id="mod_con" name="mod_con"
                value="{{ old("mod_con", $race?->mod_con) }}">
                @error('mod_con')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE INTELLIGGENZA --}}
            <div class="col-2">
                <label class="form-label" for="mod_int"><strong>Intelligenza</strong></label>
                <input class="form-control" type="number" placeholder="inserisci l'Intelligenza" id="mod_int" name="mod_int"
                value="{{ old("mod_int", $race?->mod_int) }}">
                @error('mod_int')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE SAGGEZZA --}}
            <div class="col-2">
                <label class="form-label" for="mod_wis"><strong>Saggezza</strong></label>
                <input class="form-control" type="number" placeholder="inserisci la Saggezza" id="mod_wis" name="mod_wis"
                value="{{ old("mod_wis", $race?->mod_wis) }}">
                @error('mod_wis')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>

            {{-- MODIFICATORE CARISMA --}}
            <div class="col-2">
                <label class="form-label" for="mod_cha"><strong>Carisma</strong></label>
                <input class="form-control" type="number" placeholder="inserisci Peso" id="mod_cha" name="mod_cha"  value="{{ old("mod_cha", $race?->mod_cha) }}">
                @error('mod_cha')
                    <div class="alert alert-danger my-2">{{ $message }}</div>
                @enderror
            </div>
        </div>



        <button class="btn btn-dark " type="submit">Aggiungi</button>
        <button class="btn btn-dark " type="reset">Reset</button>
        <a class="btn btn-dark" href="{{route('admin.races.index')}}">Torna alla Home</a>

   </form>
@endsection
