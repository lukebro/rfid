@extends('app')

@section('title')
Statistics
@endsection

@section('content')
	<div class="columns is-multiline">
		@for ($i = 0; $i < 20; $i++)
		<div class="column is-4">
			<div class="box">
				<h4 class="title is-4">Stat</h4>
				<p>This is the most beautiful statistic you've ever seen.</p>
			</div>
		</div>
		@endfor
	</div>
@endsection
