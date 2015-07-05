@if (Route::currentRouteName() == 'home' || Route::currentRouteName() == 'home_en')
	<section class="section section-gray" id="section-clients">	
@else
	<section class="section" id="section-clients">
@endif

	<div class="inner-content">
		<h2>{{Lang::get('messages.clients.title')}}</h2>
		<div class="intro-container">
			<h3>
				@if (Route::currentRouteName() == 'home')
					{{Lang::get('messages.home.intro_clients')}}
				@else
					{{Lang::get('messages.clients.intro')}}
				@endif
			</h3>
		</div>
		<div class="clients core-contents row">
			<?php $i = 0; ?>
			@foreach($clients as $client_slug => $client_name)
				<div class="client col-md-5ths">
					@if (Route::currentRouteName() == 'home'|| Route::currentRouteName() == 'home_en')
						<img src="{{ asset('public/img/clients-grey/'.$client_slug.'.png') }}" class="client" alt="{{{$client_name}}}">
					@else
						<img src="{{ asset('public/img/clients/'.$client_slug.'.png') }}" class="client" alt="{{{$client_name}}}">
					@endif

				</div>
			@endforeach
		</div>

		<div class="clearfix"></div>

	</div>

</section>