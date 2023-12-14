@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="w-75 p-2 my-4 m-auto bg-body-secondary border rounded-3">

        <h2><strong>Nome razza:</strong> {{ $race->name }}</h2>

        <h5><strong>Description:</strong></h5>
        <p>{{ $race->description }}</p>

        <div class="row">
            <div class="col-2 text-center">
                <h6><strong>Modificatore forza:</strong></h6>
                <p>{{$race->Mod_str }}</p>
            </div>

            <div class="col-2 text-center">
                <h6><strong>Modificatore destrezza:</strong></h6>
                <p>{{$race->Mod_dex }}</p>
            </div>

            <div class="col-2 text-center">
                <h6><strong>Modificatore costituzione:</strong></h6>
                <p>{{$race->Mod_con }}</p>
            </div>

            <div class="col-2 text-center">
                <h6><strong>Modificatore intelligenza:</strong></h6>
                <p>{{$race->Mod_int }}</p>
            </div>


            <div class="col-2 text-center">
                <h6><strong>Modificatore saggezza:</strong></h6>
                <p>{{$race->Mod_wis }}</p>
            </div>


            <div class="col-2 text-center">
                <h6><strong>Modificatore carisma:</strong></h6>
                <p>{{$race->Mod_cha }}</p>
            </div>

        </div>
    </div>

</div>

@endsection
