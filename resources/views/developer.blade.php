@extends('layout.mainlayout')

@section('title','Developer')

@section('main_content')
    <br><br>

    <div class="mx-auto" style="width:1200px">
        <h1>{{$pageTitle}}</h1>
        <br>
        <a type="button" class="btn btn-success" href="{{ route('developers.create')}}">Create Developer</a>
        <br><br>
        <table class="table table-striped text-center">
            <tr>
                <th>NO</th>
                <th>Developer</th>
                <th>Code</th>
                <th>Action</th>
            </tr>
            
            @foreach ($developers as $dev)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $dev['name'] }}</td>
                    <td>{{ $dev['code'] }}</td>
                    <td>
                        <a button type="button" class="btn btn-info" href="{{ route('developers.show', $dev->code) }}">Detail</button></a>
                        <a button type="button" class="btn btn-primary" href="{{ route('developers.edit', $dev->code) }}">Edit</button></a>
                        <form action="{{ route('developers.destroy', $dev->code) }}" method="POST">
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