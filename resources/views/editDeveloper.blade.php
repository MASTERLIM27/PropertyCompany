@extends('layout.mainlayout')

@section('title', $title)

@section('page_title', $pageTitle)

@section('main_content')
<br>
<div class="mx-auto" style="width:1200px">
    <h1>{{ $pageTitle }}</h1>
    <form method="post" action="{{ route('developers.update', $developer->code) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <br>
        <label for="dName">Developer Name</label>
        <br />
        <input type="text" id="dName" name="dName" value="{{ $developer->name }}" required>
        <br />
        <label for="dCode">Code</label>
        <br />
        <input type="text" id="dCode" name="dCode" value="{{ $developer->code }}">
        <br />
        <label for="dVideolink">Video Link</label>
        <br />
        <input type="text" id="dVideolink" name="dVideolink" value="{{ $developer->videolink }}">
        <br />
        <label for="dDescription">Description</label>
        <br />
        <input type="text" id="dDescription" name="dDescription" value="{{ $developer->description }}">
        <br /><br>
        <input type="submit" value="Edit Developer">
    </form>
</div>

<br><br><br><br>
@endsection