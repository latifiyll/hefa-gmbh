@extends('main.layouts.app')

@section('content')

<div class="col-md-12">
  <div class="col-md-12">{!! $chart->html() !!}</div>

</div>

<div class="col-md-12">

  <div class="col-md-4">{!! $visitsDchart->html() !!}</div>
  <div class="col-md-4">{!! $visitsMchart->html() !!}</div>
  <div class="col-md-4">{!! $visitsYchart->html() !!}</div>
</div>





 {!!Charts::scripts()!!}

 {!! $chart->script() !!}

{!! $visitsDchart->script() !!}
{!! $visitsMchart->script() !!}
{!! $visitsYchart->script() !!}

@endsection
