@extends('app')

@section('title')
All captures
@endsection

@section('content')
	<div class="columns">
		<div class="column is-6 is-offset-3">
			<h1 class="title">All captures</h1>
			<table class="table is-bordered is-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Card</th>
						<th>Timestamp</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($captures as $capture)
						<tr>
							<th>{{ $capture->id }}</th>
							<td><a href="{{ route('captures.show', $capture->number) }}">{{ $capture->number }}</a></td>
							@if ($capture->created_at->gte(Carbon\Carbon::now()->subHours(6)))
								<td>{{ $capture->created_at->diffForHumans() }}</td>
							@else
								<td>{{ $capture->created_at->toDayDatetimeString() }}</td>
							@endif
						</tr>
					 @endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
