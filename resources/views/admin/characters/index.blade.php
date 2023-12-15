@extends('layouts.admin')

@section('content')
    <h1>Character list:</h1>
    <h5>Aggiungi nuovo personaggio</h5><a class="btn btn-success" href="{{route('admin.characters.create')}}"><i class="fa-solid fa-plus"></i></a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">height</th>
            <th scope="col">weight</th>
            <th scope="col">armor_class</th>
            <th scope="col">Skill</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
        @foreach ($characters as $character)
            <tr>
                <td>{{$character->id}}</td>
                <td>{{$character->name}}</td>
                <td>{{$character->height}}</td>
                <td>{{$character->weight}}</td>
                <td>{{$character->armor_class}}</td>
                <td>
                    @forelse ($character->skills as $skill)
                        <span class="badge text-bg-info">{{ $skill->name }}</span>
                    @empty
                        -
                    @endforelse
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.characters.show',$character)}}"><i class="fa-solid fa-eye"></i></a>

                    <a class="btn btn-dark" href="{{route('admin.characters.edit',$character)}}"><i class="fa-solid fa-pencil"></i></a>
                    <a class="btn btn-warning" href=""><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach

        </tbody>
      </table>

      {{ $characters->links() }}
@endsection
