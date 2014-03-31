@extends('layouts.application')

@section('content')

	@include('pages/_home')

	@include('pages/_projects', array('sd' => HomeController::getSkrollrParams('projects')))

	@include('pages/_clients', array('sd' => HomeController::getSkrollrParams('clients')))

	@include('pages/_timeline', array('sd' => HomeController::getSkrollrParams('timeline'), 'data' => $data = HomeController::getSkrollrData('timeline')))
	
	@include('pages/_contact', array('sd' => HomeController::getSkrollrParams('contact', true)))

@stop