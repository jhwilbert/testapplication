@extends('layouts.application')

@section('content')

	@include('shared/_megabanner')
	@include('pages/projects/_projects')
	@include('partials/_solutions')
	@include('pages/the_company/_timeline')
	@include('partials/_clients')
	@include('shared/_contact')

@stop