@extends('app')

@section('title')
Home
@endsection

@section('content')
	<div class="container">
		<div style="width: 50%; margin: 0 auto;">
			<div class="field">
				<p class="control has-icon">
					<input class="input" type="text" placeholder="Username">
					<span class="icon is-small">
						<i class="fa fa-user"></i>
					</span>
				</p>
			</div>
			<div class="field">
				<p class="control has-icon">
					<input class="input" type="password" placeholder="Password">
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
		</div>
	</div>
@endsection