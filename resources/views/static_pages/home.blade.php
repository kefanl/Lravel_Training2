@extends('layouts.default')

@section('title','Mainpage-Kefan\'s Laravel Training Page')

@section('content')

<div class="jumbotron">
    <h1>Hello Coding World</h1>
    <p class="lead">
        What you're going to see is <a href="https://www.weibo.com/6600739471/profile?rightmod=1&wvr=6&mod=personnumber&is_all=1#_rnd1531863365545">Kefan's First Laravel Projects</a>
    </p>
    <p>
        Everything will start from here.
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup')}}" role="button">Now Register</a>
    </p>
</div>

@stop