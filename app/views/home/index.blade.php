@extends('layouts.application')

@section('content')

	@include('shared/_megabanner')
	@include('projects/_projects')
	@include('solutions/_solutions')
	@include('company/_timeline')
	@include('clients/_clients')
	@include('contact/_contact')

@stop