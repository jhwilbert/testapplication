
<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 500;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	// timeline vars
	$qt = 400; $ps = 4;
	$scrollpos = $skPos;
	$skPosOffset = sizeof($timelineEvents) * $ps * $qt;

	$skData .= ' data-'.($skPos+=$skPosOffset).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
	$skData .= ' data-emit-events';

?>

<section class="section section-gray" id="section-timeline"{{ $skData }}>

	<div class="inner-content">
		<h2>{{Lang::get('messages.timeline.title')}}</h2>
		<h3>{{Lang::get('messages.timeline.intro')}}</h3>
		<div id="timeline-container">
			<ul class="timeline skrollable">
				<?php $bull = 'background-image:!url(public/img/timeline/bullet.png)'; ?>
				@foreach($timelineEvents as $event)
					<?php
						$p1 = $scrollpos;
						$p2 = ($scrollpos + $qt);
						$p3 = ($scrollpos + ($ps - 1) * $qt);
						$p4 = ($scrollpos + $ps * $qt);

						$skData_li  = '';
						$skData_li .= ' data-'. $p1 .'="'. $bull .'"';
						$skData_li .= ' data-'. $p2 .'="background-image:!url(public/img/timeline/bullet_selected.png);"';
						$skData_li .= ' data-'. $p3 .'="'. $bull .'"';

						$skData_desc  = '';
	 					$skData_desc .= 'data-'. $p1 . '="width[cubic]:0%;"';
	 					$skData_desc .= 'data-'. $p2 . '="width:50%"';
	 					$skData_desc .= 'data-'. $p3 . '="width[outCubic]:50%;"';
	 					$skData_desc .= 'data-'. $p4 . '="width:0%;"';
					?>
					<li class="year-{{ $event['left'] ? 'left' : 'right' }}"{{ $skData_li }}>
						<div class="year"><span>{{{ $event['year'] }}}</span></div>
						<div class="description"{{ $skData_desc }}>
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
	</div>
	
</section>

