<div class="section section-gray" id="section-timeline">

	<h2>Linha do tempo</h2>
	<h3>Experiência de X anos aliada a muita pesquisa e trabalho</h3>

	<ul class="timeline">
		<?php $scrollpos = 1500; $half = 50; ?>
		@foreach($timelineEvents as $event)
			<li class="year-{{ $event['left'] ? 'left' : 'right' }}" data-{{{ $scrollpos }}}="background-image:url(public/img/timeline/bullet.png);" data-{{{ $scrollpos+$half }}}="background-image:url(public/img/timeline/bullet_selected.png);" data-{{{ $scrollpos + 2*$half }}}="background-image:url(public/img/timeline/bullet.png);">
				<div class="year"><span>{{{ $event['year'] }}}</span></div>
				<div class="description" data-{{{ $scrollpos }}}="opacity:0;" data-{{{ $scrollpos+=$half }}}="opacity:1" data-{{{ $scrollpos+=$half }}}="opacity:1;" data-{{{ $scrollpos+$half }}}="opacity:0;">
					<div class="d-arrow"></div>
					<div class="description-container">
						{{{ $event['description'] }}}
					</div>
				</div>
			</li>
		@endforeach
	</ul>
	
</div>