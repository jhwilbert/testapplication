@extends('layouts.application')

@section('content')

	@include('projects/_intro')
	@include('projects/_projects')

@stop

@section('footer')

	@include('projects/_modal')

@stop