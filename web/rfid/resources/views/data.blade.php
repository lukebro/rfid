@extends('app')

@section('title')
Data
@endsection

@section('nav')
	<div class="nav-center" style="align-items: center;">
		<div class="nav-item">
	    	<a href="/home" class="button is-primary is-inverted is-outlined">Home</a>
	   	</div>
	   	<div class="nav-item">
			<a href="{{ route('logout') }}" class="button is-primary is-inverted is-outlined">Logout</a>
		</div>
	</div>
@endsection

@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th>ID</th>
					<th>Location</th>
					<th>Timestamp</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($captures as $capture)
					<tr>
						<th>{{ $capture->id }}</th>
						<td>{{ $capture->card }}</td>
						<td>{{ $capture->location_id }}</td>
						<td>{{ Carbon\Carbon::parse($capture->created_at)->diffForHumans() }}</td>
					</tr>
				 @endforeach
			</tbody>
		</table>
	</div>
@endsection
