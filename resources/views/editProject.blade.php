@extends('layout.mainlayout')

@section('title', $title)

@section('page_title', $pageTitle)

@section('main_content')
<br>
<div class="mx-auto" style="width:1200px">
    <h1>{{ $pageTitle }}</h1>
    <form method="post" action="{{ route('projects.update', $project->id) }}">
        @csrf
    
        <input type="hidden" name="_method" value="PATCH">
        <br>
        <label for="pName">Project name</label>
        <br />
        <input type="text" id="pName" name="pName"  value="{{ $project->name }}" required>
        <br />
        <label for="pCode">Code</label>
        <br />
        <input type="text" id="pCode" name="pCode" value="{{ $project->code }}">
        <br />
        <label for="pType">Type</label>
        <br />
        <input type="text" id="pType" name="pType" value="{{ $project->type }}">
        <br />
        <label for="pVideolink">Video Link</label>
        <br />
        <input type="text" id="pVideolink" name="pVideolink" value="{{ $project->videolink }}">
        <br />
        <label for="pDescription">Description</label>
        <br />
        <input type="text" id="pDescription" name="pDescription" value="{{ $project->description }}">
        <br />
        <div class="form-group">
            <label>Developer:</label>
            <br>
            <select name="pDeveloper" class="custom-select">
                @foreach ($developers as $dev)
                    @if ($dev['code'] == $project['developer'])
                        <option value="{{ $dev['code'] }}" selected >{{ $dev['name'] }}</option>
                    @else
                        <option value="{{ $dev['code'] }}" >{{ $dev['name'] }}</option>
                    @endif
                @endforeach		
            </select>
        </div>
        <br /><br>
        <input type="submit" value="Edit project">
    </form>
</div>
@endsection