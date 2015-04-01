

<section class="section" id="section-contact">

	<div class="inner-content container">
		
		<h2>{{Lang::get('messages.contact.title')}}</h2>
		<div class="intro-container">
			<h3>{{Lang::get('messages.contact.intro')}}</h3>
		</div>
	

			<div class="row contact">
				<div class="col-md-6">
					<fieldset>	
					<input class="form-field name" type="text" name="name" value="Nome">
					<input class="form-field name" type="text" name="email" value="Email">					
					<input class="form-field text" type="text" name="assunto" value="Assunto">
					<br><br>
					<input class="form-button" type="submit" value="Enviar">
					<input class="form-button" type="submit" value="Apagar">

					</fieldset>
				</div>

			<div class="col-md-6">

				<div class="contact-item">
					<div class="contact-image">
						<img src="{{ asset('public/img/contact/address_icon.png') }}">	
					</div>	
					<div class="contact-text">
						Rua Peru, 55 – Bairro Sion<br>
						CEP 30320.040<br>
						Belo Horizonte – MG<br>
						Brasil
					</div>
				</div>


				<div class="contact-item">
					<div class="contact-image">
						<img src="{{ asset('public/img/contact/phone_icon.png') }}">
					</div>	
					<div class="contact-text" id="phone">(31) 32854999</div>
				</div>

				
				<div class="contact-item">
					<div class="contact-image">
						<img src="{{ asset('public/img/contact/email_icon.png') }}">	
					</div>	
					<div class="contact-text" id="email">
						<a href="mailto:projesom@projesom.com">projesom@projesom.com</a>					</div>
				</div>


				
				

			</div>
		</div>
	</div>

</section>