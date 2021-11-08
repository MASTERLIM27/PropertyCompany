@extends('layout.mainlayout')

@section('title', 'Developer')
@section('pagetitle', 'Detail Developer')

@section('main_content')
    <br>
    
    <div class="mx-auto" style="width:1200px">
        <h1>{{ $developers['name'] }}</h1>
        <p>Code: {{ $developers['code'] }}</p>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src={{ $developers['videolink'] }} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <br>
        <div>
            <p>Description: {{ $developers['description'] }}</p>
        </div>
        <br>
        <b>List Project</b>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Code</th>
                            <th scope="col">Type</th>
                            <th scope="col">Developer</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = 1 @endphp
                        @foreach ($developers->projects as $project)
                            <tr>
                                <th scope="row">{{ $index }}</th>
                                @php $index++ @endphp
                                <td>{{ $project['name'] }}</td>
                                <td>{{ $project['code'] }}</td>
                                <td>{{ $project['type'] }}</td>
                                <td>{{ $project['developer'] }}</td>
                                <td>{{ $project['description'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>

    <br><br><br>
@endsection