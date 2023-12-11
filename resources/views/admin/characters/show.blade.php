@extends('layouts.admin')

@section('content')
<div class="container">
<div class="box-card border-black border rounded-2 p-3">
    <h2>{{ $character->name }}</h2>
    <p>Altezza:{{ $character->height }} cm | Peso:{{ $character->weight }} kg</p>
    <p>Descrizione personaggio: -> {{$character->background }}</p>
    <img src="{{$character->image}}" alt="{{ $character->name }}">
</div>

</div>


@endsection
