@extends('layouts.application')

@section('content')

	@include('pages/_home')

	@include('pages/_projects', array('sd' => HomeController::getSkrollrData('projects')))

	@include('pages/_clients', array('sd' => HomeController::getSkrollrData('clients')))

	@include('pages/_timeline', array('sd' => HomeController::getSkrollrData('timeline')))
	
	@include('pages/_contact', array('sd' => HomeController::getSkrollrData('contact')))

@stop