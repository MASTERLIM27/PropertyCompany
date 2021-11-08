@extends('layout.mainlayout')

@section('title', $title)

@section('page_title', $pageTitle)

@section('main_content')
<br>
<div class="mx-auto" style="width:1200px">
	<h1>{{ $pageTitle }}</h1>
	<br>
	<form action="{{ route('developers.store') }}"" method="POST">
		@csrf
	
		<label for="dName">Name</label>
		<br />
		<input type="text" id="dName" name="dName">
		<br />
		<label for="dCode">Developer code</label>
		<br />
		<input type="text" id="dCode" name="dCode">
		<br />
		<label for="dVideolink">Video Link</label>
		<br />
		<input type="text" id="dVideolink" name="dVideolink">
		<br />
		<label for="dDescription">Description</label>
		<br />
		<input type="text" id="dDescription" name="dDescription">
		<br /><br>
		<input type="submit" value="Add Developer">
	</form>
</div>

@endsection