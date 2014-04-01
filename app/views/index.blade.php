@extends('layouts.application')

@section('content')

	@include('pages/_home')

	@include('pages/_projects', array('sd' => HomeController::getSkrollrParams($skrollrData['projects'])))

	@include('pages/_clients', array('sd' => HomeController::getSkrollrParams($skrollrData['clients'])))

	@include('pages/_timeline', array('sd' => HomeController::getSkrollrParams($skrollrData['timeline']), 'data' => $skrollrData['timeline']))
	
	@include('pages/_contact', array('sd' => HomeController::getSkrollrParams($skrollrData['contact'], true)))

@stop