<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 300;
	
	$skData  = '';
	if ($skPos != 0) $skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
?>

<section class="section skrollable" id="section-newsfeed"{{ $skData }}>

	<div class="inner-content container">
		
		<h2>Newsfeed</h2>

		<div class="row newsfeed">

			@foreach ($feed_lists as $feed_list)
				<div class="col-md-4">
					@foreach ($feed_list as $feed_url)

						<?php $feed = FeedReader::read($feed_url); ?>						
						<div class="feed<?php if ($feed_url == end($feed_list)) echo " last"; ?>">
							<h3><a href="{{ $feed->get_permalink() }}">{{ $feed->get_title() }}</a></h3>
							<ul>
								@foreach ($feed->get_items(0, 10) as $item)
									<li>&bull; <a href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a></li>
								@endforeach
							</ul>
						</div>

					@endforeach
				</div>
			@endforeach
		</div>
	</div>

</section>