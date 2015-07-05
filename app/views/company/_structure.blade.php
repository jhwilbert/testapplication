<section class="section section-gray" id="section-company">

	<div class="inner-content container">
		<h2>{{Lang::get('messages.structure.title')}}</h2>


		<div class="structure core-contents">

			<div class="row">
				<div class="col-md-6">
					<div class="company-img"><img src="{{ asset('public/img/company/IMG_20150113_172930.jpg') }}"></div>
				</div>

				<div class="col-md-6">
					<div class="company-img"> <img src="{{ asset('public/img/company/IMG_20150113_172731.jpg') }}"></div>
				</div>
				

			</div>
			
			<div class="row">

				<div class="col-md-6">
					@if (App::getLocale() == 'en')
						<h3>Contemporary Tradition</h3>	
						<p class="text">
							Over the 40 years Projesom has kept up with evolution of the market aligning decades of experience with deep knowledge of modern audio visual technologies.

						</p>
					@else
						<h3>Tradição sempre atualizada</h3>	
						<p class="text">
							Aliar o pioneirismo à vanguarda é o nosso desafio de todo dia. Colocamos à disposição de nossos clientes décadas de experiência somadas ao que há de mais moderno em audiovisual. 
						</p>
					@endif
				</div>


				<div class="col-md-6">
					@if (App::getLocale() == 'en')
						<h3>Experience with internacional market</h3>	
						<p class="text">
							Projesom is constantly present in global events specialized in audiovisual technology and consumer electronics. Constantly in close contact with future innovations keeping a strong relationships with renowned equipment suppliers and manufacturers. 
						</p>
					@else
						<h3>Experiência internacional</h3>	
						<p class="text">
							A Projesom está presente nas maiores feiras e congressos de audiovisual em todo o mundo. Manter os olhos no futuro é fundamental para ficar por dentro de tudo que está por vir em uma área que evolui tão rapidamente.
						</p>
					@endif					
				</div>

			</div>


		</div>

	</div>

</section>