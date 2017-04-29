<?php

namespace App;

use App\Capture;
use Carbon\Carbon;
use DB;

class Statistics
{
	protected $captures;

	protected $days = [
			'Monday' => [],
			'Tuesday' => [],
			'Wednesday' => [],
			'Thursday' => [],
			'Friday' => [],
			'Saturday' => [],
			'Sunday' => [],
	];

	protected $hours = [
		8 => [],
		9 => [],
		10 => [],
		11 => [],
		12 => [],
		13 => [],
		14 => [],
		15 => [],
		16 => [],
		17 => [],
		18 => [],
		19 => [],
	];

	public function __construct()
	{
		$this->captures = Capture::all();
	}

	public function all()
	{
		return $this->captures;
	}

	public function averageDailyPeak()
	{
		$all = $this->all();
		$first = $all->first()->created_at->subDay(1);
		$days = collect($this->days);

		$dayCount = $days->map(function ($value, $day) use ($first) {
			return $this->countUniqueDays($day, $first);
		});

		$dayTotal = $days->map(function ($value, $day) use ($all) {
		    $value = 0;
		    foreach($all as $capture) {
		    	if($day == $capture->created_at->format('l')) {
		    		$value++;
		    	}
		    }
		    return $value;
		});

		$days = $days->map(function ($value, $day) use ($dayTotal, $dayCount) {
			return (int) round($dayTotal[$day] / $dayCount[$day]);
		});

		return $days;
	}

	public function averageHourlyPeak()
	{
		$all = $this->all();
		$first = $all->first()->created_at;
		$hours = collect($this->hours);
		$dayCount = Carbon::now()->diffInDays($first);

		$hoursTotal = $hours->map(function ($value, $hour) use ($all, $dayCount) {
		    $value = 0;
		    foreach($all as $capture) {
		    	if($hour == $capture->created_at->hour) {
		    		$value++;
		    	}
		    }
		    return (int) round($value / $dayCount);
		});

		return $hoursTotal;
	}


	public function frequentOverall()
	{
		return Capture::select(DB::raw('count(*) as count, card'))
			->groupBy('card')
			->orderBy('count', 'desc')
			->get();
	}

	public function frequentDaily()
	{
		return Capture::select(DB::raw('count(*) as count, card'))
			->where('created_at', '>=', Carbon::today())
			->groupBy('card')
			->orderBy('count', 'desc')
			->get();
	}
	protected function countUniqueDays($day, $start)
	{
		$date = $start->copy();
		$counter = 0;

		while (($date = $date->modify('next ' . $day))->lt(Carbon::now())) {
			$counter++;
		}

		return $counter;
	}
}
