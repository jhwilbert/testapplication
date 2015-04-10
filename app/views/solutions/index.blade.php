@extends('layouts.application')

@section('content')

	@include('solutions/_solutions_intro')
	@include('solutions/_solutions_areas')
@stop

@section('footer')

	@include('solutions/_modal')

@stop