@extends('users.layout')
@section('content')
    <div class="card" style="margin:20px;">
        <div class="card-header">USER PAGE</div>
    </div>
    <div class="card-body">


        <h5 class="card-title">firstName : {{ $users->firstName }}</h5>
        <h5 class="card-text">lastName : {{ $users->lastName }}</h5>
        <h5 class="card-text">Gender : {{ $users->Gender }}</h5>
        <h5 class="card-text">password : {{ $users->password }}</h5>
        <h5 class="card-text">role_id : {{ $users->role_id }}</h5>
        <h5 class="card-text">status : {{ $users->status }}</h5>

        </hr>

    </div>
    </div>
@endsection
