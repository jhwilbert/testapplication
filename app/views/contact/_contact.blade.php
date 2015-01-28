<?php

	if ($skVars::$section > 0) $skVars::overlap();

	$skData  = '';
	if ($skVars::$section > 0) $skData  = ' data-'. $skVars::$pos .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skVars::addTrans()).'="top:0%"';
	$skData .= ' data-'.($skVars::addCont()).'="top:0%"';
	//$skData .= ' data-'.($skVars::addTrans()).'="top:-100%"';

	$skVars::nextSection();
?>

<section class="section skrollable" id="section-contact"{{ $skData }}>

	<div class="inner-content container">
		
		<h2>{{Lang::get('messages.contact.title')}}</h2>

		<div class="row contact">
			<div class="col-md-6">
				<img src="{{ asset('public/img/contact/address_icon.png') }}">	
				<p>Rua Peru, 55 – Bairro Sion<br>
				CEP 30320.040<br>
				Belo Horizonte – MG<br>
				Brasil
				</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('public/img/contact/phone_icon.png') }}">	
				<p>(31) 32854999 </p>
				
				<img src="{{ asset('public/img/contact/email_icon.png') }}">	
				<p><a href="mailto:projesom@projesom.com">projesom@projesom.com</a></p>
			</div>
		</div>
	</div>

</section>