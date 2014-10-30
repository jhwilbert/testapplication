@extends('layouts.application')

@section('content')

	@include('shared/_megabanner')
	@include('projects/_projects')
	@include('solutions/_solutions')
	@include('the_company/_timeline')
	@include('clients/_clients')
	@include('shared/_contact')

@stop