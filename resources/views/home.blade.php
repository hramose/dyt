@extends('master')
@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row banner">

            <div class="col-md-12">

                <h1 class="text-center margin-top-100 editContent">
                    Learning Laravel 5
                </h1>

                <h3 class="text-center margin-top-100 editContent">{!! trans('main.subtitle') !!}</h3>

                <div class="jumbotron">
                    <h1>Jumbotron</h1>
                    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <p><a class="btn btn-primary btn-lg">Learn more</a></p>
                </div>

                <div class="text-center">
                    <img src="http://learninglaravel.net/img/LearningLaravel5_cover0.png" width="302" height="391" alt="">
                </div>

            </div>

        </div>
    </div>

@endsection