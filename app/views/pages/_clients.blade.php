<div class="section skrollable" id="section-clients"{{ $sd }}>

	<h2>Clientes</h2>

	<div class="clients">
		@foreach($clients as $client_slug => $client_name)
			<img src="{{ asset('public/img/clients/'.$client_slug.'.gif') }}" class="client" alt="{{{$client_name}}}">
		@endforeach
	</div>

	<div class="clearfix"></div>

</div>