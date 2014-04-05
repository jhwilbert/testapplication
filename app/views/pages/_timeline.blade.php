<section class="section section-gray" id="section-timeline"{{ $sd }}>

	<h2>Linha do tempo</h2>
	<h3>Experiência de X anos aliada a muita pesquisa e trabalho</h3>

	<ul class="timeline skrollable">
		<?php $scrollpos = 0; $qt = 300; $ps = 4; $bull = 'background-image:!url(public/img/timeline/bullet.png)'; ?>
		@foreach($timelineEvents as $event)
			<li class="year-{{ $event['left'] ? 'left' : 'right' }}" data-_tleventpos-{{{ $scrollpos }}}="{{ $bull }}" data-_tleventpos-{{{ $scrollpos + $qt }}}="background-image:!url(public/img/timeline/bullet_selected.png);" data-_tleventpos-{{{ $scrollpos + ($ps - 1)*$qt }}}="{{ $bull }}">
				<div class="year"><span>{{{ $event['year'] }}}</span></div>
				<div class="description" data-_tleventpos-{{{ $scrollpos }}}="height[cubic]:0%;" data-_tleventpos-{{{ $scrollpos + $qt }}}="height:100%" data-_tleventpos-{{{ $scrollpos + ($ps - 1)*$qt }}}="height[outCubic]:100%;" data-_tleventpos-{{{ $scrollpos + $ps*$qt }}}="height:0%;">
					<div class="d-arrow"></div>
					<div class="description-container">
						{{{ $event['description'] }}}
					</div>
				</div>
			</li>
			<?php $scrollpos += $ps*$qt; ?>
		@endforeach
	</ul>
	
</section>

