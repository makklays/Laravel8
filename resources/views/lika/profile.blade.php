@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $user->login }}</h1>
            </div>
            <div class="col-md-12">
                <b>Name:</b> {{ $user->name }}
            </div>
            <div class="col-md-12">
                <b>Phone:</b> {{ $user->phone }}
            </div>
            <div class="col-md-12">
                <b>E-mail:</b> {{ $user->email }}
            </div>
            <div class="col-md-12">
                <b>Date of birth:</b> {{ $user->date_of_birth }}
            </div>
            <div class="col-md-12">
                <b>About:</b> {{ $user->about ?? '-' }}
            </div>
        </div>
    </div>
@endsection
