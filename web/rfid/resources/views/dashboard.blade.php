@extends('app')

@section('title')
Dashboard
@endsection

@section('content')
	<div class="columns">
		<div class="column is-6 is-offset-3">
			<h1 class="title">Your captures <span class="tag is-info">{{ $captures->count() }} captures</span></h1>
			<table class="table is-bordered is-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Timestamp</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($captures as $capture)
						<tr>
							<th>{{ $capture->id }}</th>
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
