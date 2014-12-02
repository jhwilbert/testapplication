
<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 500;

	$total_events = sizeof($timelineEvents);

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	// timeline vars
	$qt = 400; $ps = 4;
	$scrollpos = $skPos;
	$skPosOffset = $total_events * $ps * $qt;

	$skData .= ' data-'.($skPos+=$skPosOffset).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
	$skData .= ' data-emit-events';

?>

<section class="section section-gray" id="section-timeline"{{ $skData }}>

	<div class="inner-content">
		<h2>{{Lang::get('messages.timeline.title')}}</h2>
		<h3>{{Lang::get('messages.timeline.intro')}}</h3>
		<div id="timeline-container">
			<?php
				$eps = 5; // events per scroll
				$scroll_h = 370;
				$nscrolls = ceil($total_events / $eps);
				$skData_ul  = '';
				$skData_ul .= ' data-0="margin-top:0px"';
				for($i = 1; $i <= $nscrolls; $i++) {
					$pos = $scrollpos + ($i * $ps * $qt * $eps);
					$margin1 = ($i - 1) * $scroll_h;
					$margin2 = $i * $scroll_h;
					$skData_ul .= ' data-' . ($pos - 100) . '="margin-top:-' . $margin1 . 'px"';
					$skData_ul .= ' data-' . ($pos + 300) . '="margin-top[outCubic]:-' . $margin2 . 'px"';
				}

			?>
			<ul class="timeline skrollable"{{ $skData_ul }}>
				<?php 
					$left = true;
					$bull = 'background-image:!url(public/img/timeline/bullet.png)';
				?>
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
					<li class="year-{{ $left ? 'left' : 'right' }}"{{ $skData_li }}>
						<div class="year"><span>{{{ date('Y', strtotime($event->date)) }}}</span></div>
						<div class="description"{{ $skData_desc }}>
							<div class="d-arrow"></div>
							<div class="description-container">
								@if($event->file_name)
									<img src="{{ asset($event->getImagePath('medium')) }}">
								@endif
								{{ $event["text$lpr"] }}
							</div>
						</div>
					</li>
					<?php
						$scrollpos += $ps*$qt;
						$left = !$left;
					?>
				@endforeach
			</ul>
		</div>
	</div>
	
</section>

