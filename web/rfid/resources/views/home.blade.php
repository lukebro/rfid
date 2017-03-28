@extends('app')

@section('title')
Home
@endsection

@section('nav')
    <div class="nav-center" style="align-items: center;">
        <div class="nav-item">
            <a href="/data" class="button is-primary is-inverted is-outlined">Data</a>
        </div>
        <div class="nav-item">
            <a href="{{ route('logout') }}" class="button is-primary is-inverted is-outlined">Logout</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <h1 class="title">Dashboard</h1>
    </div>
@endsection
