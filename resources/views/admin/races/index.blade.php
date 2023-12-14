@extends('layouts.admin')

@section('content')
    <h1>Races list:</h1>
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($races as $race)
            <tr>
                <td>{{$race->name}}</td>
                <td>{{$race->description}}</td>
                <td>
                    {{-- SHOW --}}
                    <a class="btn btn-primary" href="{{route('admin.races.show', $race)}}"><i class="fa-solid fa-eye"></i></a>
                    {{-- EDIT --}}
                    <a class="btn btn-dark" href=""><i class="fa-solid fa-pencil"></i></a>
                    {{-- DELETE --}}
                    <form class="d-inline-block" action={{route('admin.races.destroy', $race)}} method="post" onsubmit="return confirm('Are you sure you want to delete this race?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
