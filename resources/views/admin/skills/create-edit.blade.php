@extends('layouts.admin')

@section('content')
    <h1>{{ $title }}</h1>
    <div class="container">

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($method)
        <label class="form-label" for="name">Nome</label>
        <input class="form-control mb-3" type="text" id="name" name="name" value="{{ old("name", $skill?->name) }}">
        @error('name')
                <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <label for="description" class="form-label">Descrizione</label>
        <textarea
                rows="4" cols="50"
                class="form-control mb-3"
                id="description"
                name="description">{{ old("description", $skill?->description) }}</textarea>
        @error('description')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <label class="form-label" for="peculiar_characteristic">Caratteristica Peculiare</label>
        <input class="form-control mb-3" type="text" id="peculiar_characteristic" name="peculiar_characteristic" min="0"
        value="{{ old("peculiar_characteristic", $skill?->peculiar_characteristic) }}">
        @error('peculiar_characteristic')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <label for="peculiar_characteristic" class="form-label">Caratteristica Peculiare</label>
        <select class="form-select mb-3" name="peculiar_characteristic" id="peculiar_characteristic">
            <option value="" selected disabled>Seleziona</option>

            @php
                $selectedValues = [];
            @endphp
            @foreach($skills as $skill)
                @if (!in_array($skill['peculiar_characteristic'], $selectedValues))
                    <option value="{{ $skill['peculiar_characteristic'] }}">
                        {{ $skill['peculiar_characteristic'] }}
                    </option>
                    @php
                        $selectedValues[] = $skill['peculiar_characteristic'];
                    @endphp
                @endif
            @endforeach
        </select>

        <button class="btn btn-dark " type="submit">Aggiungi</button>
        <button class="btn btn-dark ">Reset</button>
        <button class="btn btn-dark " href="{{route("admin.skills.index")}}">Torna alla Home</button>
        </form>
    </div>

@endsection
