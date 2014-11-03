
<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 500;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	// timeline vars
	$qt = 300; $ps = 4;
	$scrollpos = $skPos;
	$skPosOffset = sizeof($timelineEvents) * $ps*$qt;

	$skData .= ' data-'.($skPos+=$skPosOffset).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
	$skData .= ' data-emit-events';

?>

<section class="section section-gray" id="section-timeline"{{ $skData }}>

	<div class="inner-content">
		<h2>{{Lang::get('messages.timeline.title')}}</h2>
		<h3>{{Lang::get('messages.timeline.intro')}}</h3>

		<ul class="timeline skrollable">
			<?php $bull = 'background-image:!url(public/img/timeline/bullet.png)'; ?>
			@foreach($timelineEvents as $event)
				<li class="year-{{ $event['left'] ? 'left' : 'right' }}" data-{{{ $scrollpos }}}="{{ $bull }}" data-{{{ $scrollpos + $qt }}}="background-image:!url(public/img/timeline/bullet_selected.png);" data-{{{ $scrollpos + ($ps - 1)*$qt }}}="{{ $bull }}">
					<div class="year"><span>{{{ $event['year'] }}}</span></div>
					<div class="description" data-{{{ $scrollpos }}}="height[cubic]:0%;" data-{{{ $scrollpos + $qt }}}="height:100%" data-{{{ $scrollpos + ($ps - 1)*$qt }}}="height[outCubic]:100%;" data-{{{ $scrollpos + $ps*$qt }}}="height:0%;">
						<div class="d-arrow"></div>
						<div class="description-container">
							{{{ $event["description$lpr"] }}}
						</div>
					</div>
				</li>
				<?php $scrollpos += $ps*$qt; ?>
			@endforeach
		</ul>
	</div>
	
</section>

