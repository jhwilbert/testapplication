
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
				<?php
					$skData_li  = '';
					$skData_li .= ' data-'. $scrollpos .'="'. $bull .'"';
					$skData_li .= ' data-'. ($scrollpos + $qt) .'="background-image:!url(public/img/timeline/bullet_selected.png);"';
					$skData_li .= ' data-'. ($scrollpos + ($ps - 1)*$qt) .'="'. $bull .'"';

					$skData_desc  = '';
 					$skData_desc .= 'data-'. $scrollpos . '="width[cubic]:0%;"';
 					$skData_desc .= 'data-'. ($scrollpos + $qt) . '="width:50%"';
 					$skData_desc .= 'data-'. ($scrollpos + ($ps - 1)*$qt) . '="width[outCubic]:50%;"';
 					$skData_desc .= 'data-'. ($scrollpos + $ps*$qt) . '="width:0%;"';
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
	
</section>

