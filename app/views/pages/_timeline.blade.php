<div class="section section-gray skrollable" id="section-timeline"{{ $sd }}>

	<h2>Linha do tempo</h2>
	<h3>Experiência de X anos aliada a muita pesquisa e trabalho</h3>

	<ul class="timeline skrollable">
		<?php $scrollpos = 6000; $qt = 200; $bull = 'background-image:url(public/img/timeline/bullet.png);
background-image:url(public/img/timeline/bullet.png);'; ?>
		@foreach($timelineEvents as $event)
			<li class="year-{{ $event['left'] ? 'left' : 'right' }}" data-{{{ $scrollpos }}}="{{ $bull }}" data-{{{ $scrollpos + $qt }}}="background-image:url(public/img/timeline/bullet_selected.png);" data-{{{ $scrollpos + 7*$qt }}}="{{ $bull }}">
				<div class="year"><span>{{{ $event['year'] }}}</span></div>
				<div class="description" data-{{{ $scrollpos }}}="height[cubic]:0%;" data-{{{ $scrollpos + $qt }}}="height:100%" data-{{{ $scrollpos + 7*$qt }}}="height[outCubic]:100%;" data-{{{ $scrollpos + 8*$qt }}}="height:0%;">
					<div class="d-arrow"></div>
					<div class="description-container">
						{{{ $event['description'] }}}
					</div>
				</div>
			</li>
			<?php $scrollpos += 8*$qt; ?>
		@endforeach
	</ul>
	
</div>

