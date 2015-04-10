

<section class="section" id="section-contact">

	<div class="inner-content container">
		
		<h2>{{Lang::get('messages.contact.title')}}</h2>
		<div class="intro-container">
			<h3>{{Lang::get('messages.contact.intro')}}</h3>
		</div>
	

			<div class="row contact">
				<div class="col-md-6">

					{{ Form::open(array('url' => '/contact_request')) }}
    				{{ Form::text('nome', 'Nome', array('class' => 'form-field name')) }}
    				<br>
    				{{ Form::text('email', 'email@email.com', array('class' => 'form-field name')) }}
    				<br>
    				{{ Form::textarea('message', 'Mensagem', array('class' => 'form-field text','size' => '30x5') ) }}

    				{{ Form::submit('Enviar',array('class' => 'form-button')); }}
    				{{ Form::reset('Apagar',array('class' => 'form-button')); }}

		            <ul class="errors">
		                @foreach($errors->all('<li>:message</li>') as $message)
		                {{ $message }}
		                @endforeach
		            </ul>

					{{ Form::close() }}

				</div>

			<div class="col-md-6">

				<div class="contact-item">
					<div class="contact-image">
						<img src="{{ asset('public/img/contact/address_icon.png') }}">	
					</div>	
					<div class="contact-text">
						Av. Nossa Senhora do Carmo 1191<br>
						5º andar • Bairro Sion <br>
						CEP 30310 000<br>
						Belo Horizonte • MG<br>
					</div>
				</div>


				<div class="contact-item">
					<div class="contact-image">
						<img src="{{ asset('public/img/contact/phone_icon.png') }}">
					</div>	
					<div class="contact-text" id="phone">+55 (31) 32854999</div>
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