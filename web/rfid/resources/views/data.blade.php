@extends('app')

@section('title')
Data
@endsection

@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th>ID</th>
					<th>Timestamp</th>
					<th>Location</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($captures as $capture)
					<tr>
						<th>{{ $capture->id }}</th>
						<td>{{ $capture->card }}</td>
						<td>{{ $capture->location_id }}</td>
						<td>{{ $capture->created_at }}</td>
					</tr>
				 @endforeach
			</tbody>
		</table>
	</div>
@endsection