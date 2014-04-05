@extends('layouts.application')

@section('content')

	@include('pages/_home')

	@include('pages/_projects', array('sd' => HomeController::getSkrollrParams('projects', $skrollrData['projects'])))

	@include('pages/_clients', array('sd' => HomeController::getSkrollrParams('clients', $skrollrData['clients'])))

	@include('pages/_timeline', array('sd' => HomeController::getSkrollrParams('timeline', $skrollrData['timeline']), 'data' => $skrollrData['timeline']))
	
	@include('pages/_contact', array('sd' => HomeController::getSkrollrParams('contact', $skrollrData['contact'], true)))

@stop