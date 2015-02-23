<section class="section" id="section-clients">

	<div class="inner-content">
		<h2>{{Lang::get('messages.clients.title')}}</h2>

		<h3>
			@if (Route::currentRouteName() == 'home')
				{{Lang::get('messages.home.intro_clients')}}
			@else
				{{Lang::get('messages.clients.intro')}}
			@endif
		</h3>

		<div class="clients core-contents row">
			<?php $i = 0; ?>
			@foreach($clients as $client_slug => $client_name)
				<div class="client col-md-5ths">
					<img src="{{ asset('public/img/clients/'.$client_slug.'.png') }}" class="client" alt="{{{$client_name}}}">
				</div>
			@endforeach
		</div>

		<div class="clearfix"></div>

	</div>

</section>