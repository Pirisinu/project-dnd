@extends('layouts.admin')

@section('content')
<div class="container">
    @if (session("success"))
        <div class="alert alert-success" role="alert">
            {{ session("success") }}
        </div>
    @endif

    <h1>Skills list:</h1>
    <h5>Aggiungi nuova skill</h5><a class="btn btn-success" href="{{route('admin.skills.create')}}"><i class="fa-solid fa-plus"></i></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Caratteristica peculiare</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($skills as $skill)
            <tr>
                <td>{{$skill->name}}</td>
                <td>{{$skill->description}}</td>
                <td>{{$skill->peculiar_characteristic}}</td>
                <td>
                    <a class="btn btn-dark" href="{{route('admin.skills.edit',$skill)}}"><i class="fa-solid fa-pencil"></i></a>
                    @include("admin.partials.form-delete",["route" => route("admin.skills.destroy", $skill),"message" => "Sei sicuro di voler eliminare questa skill?"])
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

@endsection
