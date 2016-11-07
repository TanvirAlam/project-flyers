@extends('layouts.masterlayout')
@section('content')
<div class="row">
	<div class="col-md-3">
		<h1>{!! $flyer->street !!}</h1>
		<h1>{!! $flyer->price !!}</h1>
		<hr>
		<div class="description">{!! nl2br($flyer->description) !!}</div>
	</div>
	<div class="col-md-9">
		@foreach($flyer->photos as $photo)
			{!! HTML::image($photo->path) !!}
		@endforeach
	</div>
</div>
<hr>
<h2>Add Your Photos:</h2>
	<form id="addPhotoForm" action="{{$flyer->street}}/photos" method="POST" class="dropzone" id="my-awesome-dropzone">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
@stop