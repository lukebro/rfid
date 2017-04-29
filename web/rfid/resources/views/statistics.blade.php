@extends('app')

@section('title')
Statistics
@endsection

@section('content')
	<div class="columns is-multiline">
		@for ($i = 0; $i < 20; $i++)
		<div class="column is-4">
			<div class="box">
				<canvas id="box{{ $i }}" width="400" height="400"></canvas>
			</div>
		</div>
		@endfor
	</div>
@endsection

@section('js')
	<script>
		var data = {
	        datasets: [{
	            label: 'Scatter Dataset',
	            borderColor: 'rgba(255, 0, 0, 0.9)',
	            backgroundColor: 'rgba(230, 0, 0, 0.5)',
	            data: [{
	                x: -10,
	                y: 0
	            }, {
	                x: 0,
	                y: 10
	            }, {
	                x: 10,
	                y: 5
	            }]
	        }]
    	};
		var options = {
	        scales: {
	            xAxes: [{
	                type: 'linear',
	                position: 'bottom'
	            }]
	        }
    	};
		var myChart = new Chart(document.getElementById('box0'), {
			type: 'line',
			data: data,
			options: options,
		});
	</script>
@endsection
