@extends('app')

@section('title')
Statistics
@endsection

@section('content')
	<div class="columns">
		<div class="column is-4">
			<div class="box">
				<div class="title is-4">Top 5 Most Frequent</div>
				@foreach ($stats->frequentOverall()->take(5) as $capture)
					<div><b>{{ $loop->iteration }}.</b> <a href="{{ route('captures.show', $capture->number)}}">{{ $capture->number }}</a></div>
				@endforeach
			</div>
			<div class="box">
				<div class="title is-4">Today's Most Frequent</div>
				@foreach ($stats->frequentDaily()->take(5) as $capture)
					<div><b>{{ $loop->iteration }}.</b> <a href="{{ route('captures.show', $capture->number)}}">{{ $capture->number }}</a></div>
				@endforeach
			</div>
			<div class="box">
				<div class="title is-4">Average Time Spent In MS314</div>
				<div class="subtitle" style="margin-top: 0.5em">
					<span class="tag is-primary is-large">{{ round($stats->averageTimeSpent()) }} minutes</span>
				</div>
			</div>
		</div>

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
					color="63,81,181"
					:x="['8am', '9am', '10am', '11am', '12pm', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm']"
					:y='{!! $stats->averageHourlyPeak()->values()->toJson() !!}'
				>
				</line-graph>
			</div>
		</div>
	</div>

@endsection
