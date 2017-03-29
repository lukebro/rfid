@extends('app')

@section('title')
Login
@endsection

@section('content')
<div class="container">
    <div class="container">
        <div id="form__container" style="width: 50%; margin: 0 auto;">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <article class="message is-danger">
                        <div class="message-body">
                            {{ $error }}
                        </div>
                    </article>
                @endforeach
            @endif
            <form role="form" method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
                <div class="field">
                    <p class="control has-icon">
                        <input class="input" type="text" placeholder="Username" name="username">
                        <span class="icon is-small">
                            <i class="fa fa-user"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icon">
                        <input class="input" type="password" placeholder="Password" name="password">
                        <span class="icon is-small">
                            <i class="fa fa-lock"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        <button class="button is-primary is-inverted is-outlined">
                        Login
                        </button>
                    </p>
                </div>
                <!--
                <div class="field">
                    <p class="control">
                        Don't have an account? <a href="{{ route("register") }}"><strong>Register here!</strong></a>
                    </p>
                </div>
                -->
            </form>
        </div>
    </div>
</div>
@endsection
