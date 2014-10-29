<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 300;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
?>
<section class="section section-gray skrollable" id="section-company"{{ $skData }}>

	<div class="inner-content container">
		<h2>A Empresa</h2>

		<div class="row company">

			<div class="col-md-6">
				A evolução tecnológica ocorrida nas últimas décadas fez da Projesom mais que uma autoridade em engenharia de áudio e vídeo, mas uma especialista em pesquisas de novas tecnologias, atualização de produtos e desenvolvimento de técnicas inovadoras. Renovar-se foi fundamental para continuar surpreendendo clientes com imagens e sons. 
			</div>

			<div class="col-md-6">
				Sediada em Belo Horizonte/ MG, a Projesom possui uma estrutura inteligente. Tem parceria sólida com as melhores marcas e fornecedores. Conta com uma equipe formada por engenheiros e técnicos qualificados, dirigidos pelos fundadores da empresa, Georgina Santos Wilbert e João Carlos Wilbert. 
			</div>

		</div>

	</div>

</section>