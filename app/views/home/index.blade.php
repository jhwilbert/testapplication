@extends('layouts.application')

@section('content')

	@include('shared/_megabanner')
	@include('home/_intro')
	@include('projects/_projects')
	@include('solutions/_solutions_intro')
	@include('clients/_clients')
	@include('contact/_contact')

@stop

@section('footer')

	@include('projects/_modal')
	@include('solutions/_modal')
	
@stop