@extends('app')

@section('title')
Register
@endsection

@section('content')
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <h3 class="title">Register</h3>
            @include('partials.errors')
            <form method="POST" action="{{ route('register') }}">
                 {{ csrf_field() }}
                <div class="field">
                    <p class="control has-icon">
                        <input class="input" type="text" placeholder="Username" name="username" value="{{ old('username') }}" autocomplete="off" required>
                        <span class="icon is-small">
                            <i class="fa fa-user"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icon">
                        <input class="input" type="text" placeholder="Card number" name="card" value="{{ old('card') }}" autocomplete="off" required>
                        <span class="icon is-small">
                            <i class="fa fa-id-card"></i>
                        </span>
                    </p>
                    <p class="help is-info"><a @click="$emit('modal', 'card')">How do I find my card number?</a></p>
                </div>
                <div class="field">
                    <p class="control has-icon">
                        <input class="input" type="password" placeholder="Password" name="password" autocomplete="off" required>
                        <span class="icon is-small">
                            <i class="fa fa-lock"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icon">
                       <input class="input" type="password" placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required>
                        <span class="icon is-small">
                            <i class="fa fa-lock"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        <button class="button is-primary">
                        Register
                        </button>
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        Already have an account? <a href="{{ route("login") }}">Login here!</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <modal name="card">
        <template slot="title">How to find your card number</template>
        <p class="image is-16by9">
            <img src="{{ asset('images/card.png') }}">
        </p>
        <p>
            A 6 digit card number is located on the back of your CCSU Bluechip card.
        </p>
    </modal>
@endsection

