@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $user->login }} - User</h2>
            </div>
            <div class="col-md-12">
                <b>name:</b> {{ $user->name }}
            </div>
            <div class="col-md-12">
                <b>phone:</b> {{ $user->phone }}
            </div>
            <div class="col-md-12">
                <b>email:</b> {{ $user->email }}
            </div>
            <div class="col-md-12">
                <b>date of birth:</b> {{ $user->date_of_birth }}
            </div>
            <div class="col-md-12">
                <b>about:</b> {{ $user->about }}
            </div>
        </div>
    </div>
@endsection
