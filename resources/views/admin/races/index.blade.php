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
                    <a class="btn btn-primary" href=""><i class="fa-solid fa-eye"></i></a>
                    <a class="btn btn-dark" href=""><i class="fa-solid fa-pencil"></i></a>
                    <a class="btn btn-warning" href=""><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
