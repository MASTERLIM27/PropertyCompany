@extends('layout.mainlayout')

@section('title', 'Project')
@section('pagetitle', 'Detail Project')

@section('main_content')
    <br>
    <div class="mx-auto" style="width:1200px">
        <h1>{{ $project['name'] }}</h1>
        <br>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src={{ $project['videolink'] }} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p>Code: {{ $project['code'] }}</p>
        <p>Type: {{ $project['type'] }}</p>
        <p>Developer: {{ $project['developer'] }}</p>
        <p>Description: {{ $project['description'] }}</p>
    </div>
@endsection