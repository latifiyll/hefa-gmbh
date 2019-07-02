<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use Charts;
use App\Category;
use App\User;
use App\Visit;
class ChartsController extends Controller
{

  public function chart(Request $request, Type $posts  ){

    $posts = Type::all();

    $chart = Charts::create( 'line', 'highcharts')
    ->title("Posts")
    ->elementLabel("Clicks")
    ->dimensions(1000,500)
    ->responsive(true)
    ->labels($posts->pluck('type_name'))
    ->values($posts->pluck('clicks'));

    $visitsDchart = Charts::database(Visit::all(), 'line', 'highcharts')
    ->title("Visits by Date")
    ->elementLabel("Visits")
    ->dimensions(1000,500)
    ->responsive(true)
    ->groupByDay();

    $visitsMchart = Charts::database(Visit::all(), 'line', 'highcharts')
    ->title("Visits by Month")
    ->elementLabel("Visits")
    ->dimensions(1000,500)
    ->responsive(true)
    ->groupByMonth();



    $visitsYchart = Charts::database(Visit::all(), 'line', 'highcharts')
    ->title("Visits by Year")
    ->elementLabel("Visits")
    ->dimensions(1000,500)
    ->responsive(true)
    ->groupByYear();

    return view('main.home',  compact('chart', 'visitsYchart', 'visitsDchart', 'visitsMchart'));
  }
}
