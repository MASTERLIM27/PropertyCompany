@extends('layout.mainlayout')

@section('title','My Project')

@section('main_content')
    <br><br>

    <div class="mx-auto" style="width:1200px">
        <h1>{{$pageTitle}}</h1>
        <br>
        <a type="button" class="btn btn-success" href="{{ route('projects.create')}}">Create Project</a>
        <br><br>
        <table class="table table-striped table table-dark text-center">
            <tr>
                <th>NO</th>
                <th>PROJECT</th>
                <th>CODE</th>
                <th>TYPE</th>
                <th>DEVELOPER</th>
                <th>Action</th>
            </tr>
            
            @foreach ($projects as $pro)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td> 
                        {{ $pro['name'] }}
                    </td>
                    <td>{{ $pro['code'] }}</td>
                    <td>{{ $pro['type']}}</td>
                    <td>
                        <a href="{{ route('developers.show', $pro->developers->code) }}">
                            {{ $pro->developers->name }}
                        </a>
                    </td>
                    <td>
                        <a button type="button" class="btn btn-info" href="{{ route('projects.show', $pro->code) }}">Detail</button></a>
                        <a button type="button" class="btn btn-primary" href="{{ route('projects.edit', $pro->code) }}">Edit</button></a>
                        <form action="{{ route('projects.destroy', $pro->code) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
    <br><br><br>
@endsection