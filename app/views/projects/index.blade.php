@extends('layouts.application')

@section('content')

	@include('shared/_megabanner')
	@include('projects/_projects')
	@include('contact/_contact')

@stop

@section('footer')

	@include('projects/_modal')

@stop