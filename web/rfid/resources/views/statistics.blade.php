@extends('app')

@section('title')
Statistics
@endsection

@section('content')
	<div class="columns is-multiline">
		<div class="column is-4">
			<div class="box">
				<div class="title is-4">Average Daily Peak</div>
				<line-graph
					label="Captures"
					color="244,67,54"
					:x="['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']"
					:y='{!! $stats->averageDailyPeak()->values()->toJson() !!}'
				>
				</line-graph>
			</div>
		</div>
		<div class="column is-4">
			<div class="box">
				<div class="title is-4">Average Hourly Peak</div>
				<line-graph
					label="Captures"
					color="244,67,54"
					:x="['']"
					:y='{!! $stats->averageDailyPeak()->toJson() !!}'
				>
				</line-graph>
			</div>
		</div>
	</div>
@endsection
