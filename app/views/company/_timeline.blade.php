

<section class="section section-gray" id="section-timeline">

	<div class="inner-content">
		<h2>{{Lang::get('messages.timeline.title')}}</h2>
		<h3>{{Lang::get('messages.timeline.intro')}}</h3>
		<div id="timeline-container">

			<ul class="timeline">
				<?php 
					$left = true;
					$bull = 'background-image:!url(public/img/timeline/bullet.png)';
					$l = 0;
				?>
				@foreach($timelineEvents as $event){{ $left = !$left }}
					<li class="year-{{ $left ? 'left' : 'right' }}">

						<div class="year"><span>{{{ date('Y', strtotime($event->date)) }}}</span></div>
						<div class="description y-{{ $l }}">
							<div class="d-arrow"></div>
							<div class="description-container">
								<div class="description-image">
								@if($event->file_name)
									<img src="{{ asset($event->getImagePath('medium')) }}">
								@endif
								</div>
								<div class="description-text">
								{{ $event["text$lpr"] }}
								</div>
							</div>
						</div>

				@endforeach
			</ul>
		</div>
	</div>
	
</section>

