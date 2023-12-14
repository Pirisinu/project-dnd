@extends('layouts.admin')

@section('content')
    <h1>{{ $title }}</h1>
    <div class="container">

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($method)
        <label class="form-label" for="name">Nome</label>
        <input class="form-control mb-3" type="text" placeholder="inserisci il nome" id="name" name="name" value="{{ old("name", $skill?->name) }}">

        <label for="description" class="form-label">Descrizione</label>
        <textarea
                rows="4" cols="50"
                class="form-control mb-3"
                id="description"
                name="description">{{ old("description", $skill?->description) }}</textarea>

        <label class="form-label" for="peculiar_characteristic">Caratteristica Peculiare</label>
        <input class="form-control mb-3" type="text" placeholder="Inserisci caratteristica peculiare" id="peculiar_characteristic" name="peculiar_characteristic" min="0"
        value="{{ old("peculiar_characteristic", $skill?->peculiar_characteristic) }}">

        <button class="btn btn-dark " type="submit">Aggiungi</button>
        <button class="btn btn-dark ">Reset</button>
        <button class="btn btn-dark " href="{{route("admin.skills.index")}}">Torna alla Home</button>
        </form>
    </div>

@endsection
