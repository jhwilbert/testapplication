@extends('layouts.application')

@section('content')

	@include('shared/_megabanner')
	@include('solutions/_solutions')
	@include('contact/_contact')

@stop

@section('footer')

	@include('solutions/_modal')

@stop