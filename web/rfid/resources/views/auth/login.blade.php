@extends('app')

@section('title')
Login
@endsection

@section('content')
<div class="columns">
    <div class="column is-4 is-offset-4">
        <h3 class="title">Login</h3>
        @include('partials.errors')
        <form method="POST" action="{{ route('login') }}">
             {{ csrf_field() }}
            <div class="field">
                <p class="control has-icon">
                    <input class="input" type="text" placeholder="Username" autocomplete="off" value="{{ old('username') }}" name="username" required>
                    <span class="icon is-small"><i class="fa fa-user"></i></span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icon">
                    <input class="input" type="password" placeholder="Password" name="password" autocomplete="off" required>
                    <span class="icon is-small"><i class="fa fa-lock"></i></span>
                </p>
            </div>
            <div class="field">
                <p class="control">
                    <button class="button is-primary">Login</button>
                </p>
            </div>
            <div class="field">
                <p class="control">
                    Don't have an account? <a href="{{ route("register") }}">Register here!</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection
