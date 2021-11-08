@extends('layout.mainlayout')

@section('title', $title)

@section('page_title', $pageTitle)

@section('main_content')
<br>
<div class="mx-auto" style="width:1200px">
	<h1>{{ $pageTitle }}</h1>
	<br>
	<form action="{{ route('projects.store') }}" method="post">
		@csrf
	
		<label for="pName">Project name</label>
		<br />
		<input type="text" id="pName" name="pName">
		<br />
		<label for="pCode">Code</label>
		<br />
		<input type="text" id="pCode" name="pCode">
		<br />
		<label for="pType">Type</label>
		<br />
		<input type="text" id="pType" name="pType">
		<br />
		<label for="pVideolink">Video Link</label>
		<br />
		<input type="text" id="pVideolink" name="pVideolink">
		<br />
		<label for="pDescription">Description</label>
		<br />
		<input type="text" id="pDescription" name="pDescription">
		<br />
		<div class="form-group">
			<label>Developer:</label>
			<br>
			<select name="pDeveloper" class="custom-select">
				<option value="" selected disabled hidden>Choose Here</option>
				@foreach ($developers as $developer)
					<option value="{{ $developer['code'] }}">{{ $developer['name'] }}</option>
				@endforeach		
			</select>
		</div>
		<br /><br>
		<input type="submit" value="Add project">
	</form>
	
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }} </li>			
				@endforeach
			</ul>
		</div>
	@endif
</div>

@endsection