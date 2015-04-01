

<section class="section" id="section-contact">

	<div class="inner-content container">
		
		<h2>{{Lang::get('messages.contact.title')}}</h2>
			<div class="row contact">
				<div class="col-md-6">
					<fieldset>	
					First name:<br>
					<input class="form-field" type="text" name="firstname" value="Nome">
					<br>
					Last name:<br>
					<input class="form-field" type="text" name="lastname" value="Mouse">
					<br><br>
					<input type="submit" value="Submit"></fieldset>
				</div>

			<div class="col-md-4">
				<img src="{{ asset('public/img/contact/address_icon.png') }}">	
				<p>Rua Peru, 55 – Bairro Sion<br>
				CEP 30320.040<br>
				Belo Horizonte – MG<br>
				Brasil
				</p>

				<img src="{{ asset('public/img/contact/phone_icon.png') }}">	
				<p>(31) 32854999 </p>
				
				<img src="{{ asset('public/img/contact/email_icon.png') }}">	
				<p><a href="mailto:projesom@projesom.com">projesom@projesom.com</a></p>

			</div>
		</div>
	</div>

</section>