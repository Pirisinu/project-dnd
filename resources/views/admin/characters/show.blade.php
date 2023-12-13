@extends('layouts.admin')

@section('content')
<div class="container">
<div class="box-card border-black border rounded-2 p-3">
    <h2>{{ $character->name }}</h2>
    <p>Altezza:{{ $character->height }} cm | Peso:{{ $character->weight }} kg</p>
    <p>Descrizione personaggio: -> {{$character->background }}</p>
    <img src="{{asset('storage/'. $character->image)}}" alt="{{ $character->name }}">
    <p>Classe armatura: -> {{$character->armor_class }}</p>
    <p>Forza: -> {{$character->str }}</p>
    <p>Destrezza: -> {{$character->dex }}</p>
    <p>Costituzione: -> {{$character->con }}</p>
    <p>Intelligenza: -> {{$character->int }}</p>
    <p>Saggezza: -> {{$character->wis }}</p>
    <p>Carisma: -> {{$character->cha }}</p>

</div>

</div>


@endsection
