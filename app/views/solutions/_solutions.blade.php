
<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 500;

	$skData  = '';
	if ($skPos != 0) $skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$breakPointUp = $skPos;
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$breakPointDown = $skPos;
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
	$skData .= ' data-emit-events';

?>

<script type="text/javascript">
	var solutionsBpUp = 'data<?php echo $breakPointUp; ?>';
	var solutionsBpDn = 'data<?php echo $breakPointDown; ?>';
</script>

<section class="section skrollable" id="section-solutions"{{ $skData }}>

	<div class="inner-content container">
		
		<h2>{{Lang::get('messages.solutions.title')}}</h2>

		<h3>
			@if (Route::currentRouteName() == 'home')
				{{Lang::get('messages.home.intro_solutions')}}
			@else
				{{Lang::get('messages.solutions.intro')}}
			@endif
		</h3>

		<div class="row solutions-row">
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/engenharia.gif') }}" alt="{{Lang::get('messages.solutions.item1.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item1.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item1.text')}}</p>
				<a href="{{ route('show_solution', array(1, App::getLocale())) }}" class="solution-plus">+</a>
			</div>
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/conectividade.gif') }}" alt="{{Lang::get('messages.solutions.item2.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item2.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item2.text')}}</p>
				<a href="#" class="solution-plus">+</a>
			</div>
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/estudios.gif') }}" alt="{{Lang::get('messages.solutions.item3.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item3.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item3.text')}}</p>
				<a href="#" class="solution-plus">+</a>
			</div>
		</div>
	</div>

</section>


<div class="modal fade gallery-modal" id="show-solution">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>  	
			<div class="modal-body">
				<h3 id="solution-title"></h3>
				<div id="solution-slides" class="slides"></div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
