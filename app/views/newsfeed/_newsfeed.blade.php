<?php

	if ($skVars::$section > 0) $skVars::overlap();

	$skData  = '';
	if ($skVars::$section > 0) $skData  = ' data-'. $skVars::$pos .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skVars::addTrans()).'="top:0%"';
	$skData .= ' data-'.($skVars::addCont()).'="top:0%"';
	$skData .= ' data-'.($skVars::addTrans()).'="top:-100%"';

	$skVars::nextSection();
?>

<section class="section skrollable" id="section-newsfeed"{{ $skData }}>

	<div class="inner-content container">
		
		<h2>Newsfeed</h2>

		<h3>Recicle-se, mantenha-se informado sobre tecnologia consultando nossa seleção de feeds</h3>

		<div class="row newsfeed">

			@foreach ($feed_lists as $feed_list)
				<div class="col-md-4">
					@foreach ($feed_list as $feed_url)

						<?php $feed = FeedReader::read($feed_url); ?>						
						<div class="feed<?php if ($feed_url == end($feed_list)) echo " last"; ?>">
							<h4><a href="{{ $feed->get_permalink() }}" target="_blank">{{ $feed->get_title() }}</a></h4>
							<ul>
								@foreach ($feed->get_items(0, 6) as $item)
									<li>&bull; <a href="{{ $item->get_permalink() }}" target="_blank">{{ $item->get_title() }}</a></li>
								@endforeach
							</ul>
						</div>

					@endforeach
				</div>
			@endforeach
		</div>
	</div>

</section>