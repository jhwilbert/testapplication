@extends('layouts.application')

@section('content')

	@include('pages/solutions/_solutions')
	@include('pages/projects/_projects')
	@include('pages/the_company/_timeline')
	@include('partials/_clients')
	@include('shared/_contact')

@stop