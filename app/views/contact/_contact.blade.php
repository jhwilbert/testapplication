

<section class="section" id="section-contact">

	<div class="inner-content container">
		
		<h2>{{Lang::get('messages.contact.title')}}</h2>

		<form action="action_page.php">
			<fieldset>
			First name:<br>
			<input type="text" name="firstname" value="Mickey">
			<br>
			Last name:<br>
			<input type="text" name="lastname" value="Mouse">
			<br><br>
			<input type="submit" value="Submit"></fieldset>
		</form>

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