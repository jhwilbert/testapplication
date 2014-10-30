
<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 500;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$breakPointUp = $skPos;
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$breakPointDown = $skPos;
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
	$skData .= ' data-emit-events';

?>

<script type="text/javascript">
	var solutionsBpUp = 'data<?php echo $breakPointUp; ?>';
	var solutionsBpDn = 'data<?php echo $breakPointDown; ?>';
</script>

<section class="section skrollable" id="section-solutions"{{ $skData }}>

	<div class="inner-content container">
		
		<h2>Soluções</h2>

		<h3>
			@if (Route::currentRouteName() == 'home')
				Conheça nossos serviços
			@else
				São quase 40 anos no mercado, sempre oferecendo o que há de mais moderno em sistemas de áudio e vídeo customizados e prontos para usar. 
			@endif
		</h3>

		<div class="row solutions-row">
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/engenharia.gif') }}" alt="Engenharia de áudio e vídeo">
				</div>
				<h4>Engenharia de áudio e vídeo</h4>
				<p>Salas de cinema, auditórios e plenários, equipamentos de tradução simultânea, venda e importação de equipamentos, instalação, manutenção e assistência técnica</p>
				<a href="{{ route('show_solution', 1) }}" class="solution-plus">+</a>
			</div>
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/conectividade.gif') }}" alt="Conectividade em tempo real">
				</div>
				<h4>Conectividade em tempo real</h4>
				<p>Projeto e montagem de salas de videoconferência profissionais, sistemas de tradução simultânea, venda e importação de equipamentos, instalação, manutenção e assistência técnica</p>
				<a href="#" class="solution-plus">+</a>
			</div>
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/estudios.gif') }}" alt="Estúdios de rádio e TV">
				</div>
				<h4>Estúdios de rádio e TV</h4>
				<p>Projeto e montagem de estúdios profissionais, tratamento e isolamento acústico, iluminação cênica, venda e importação de equipamentos, instalação, manutenção e assistência técnica</p>
				<a href="#" class="solution-plus">+</a>
			</div>
		</div>
	</div>

</section>


<div class="modal fade gallery-modal" id="show-solution">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <h3 id="solution-title"></h3>
        <div id="solution-slides" class="slides"></div>
    	<div id="solution-description"></div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
