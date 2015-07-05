<section class="section" id="section-company">

	<div class="inner-content container">
		<h2>{{Lang::get('messages.projects.title')}}</h2>

		<div class="intro-container">
			<h3>{{Lang::get('messages.projects.intro')}}</h3>
		</div>
		<div class="row company core-contents">

			<div class="col-md-6">
				<p class="text">
					@if (App::getLocale() == 'en')
						 We work closely with our clients during different stages of project development: from scoping and planning through the install constantly mindful of the longevity and maintanance of a system.
					@else
						 Capricho é fundamental em todas as etapas do trabalho: do dimensionamento do projeto à instalação dos equipamentos, preocupando-se também com a longevidade do sistema e sua manutenção. 
					@endif
				</p>
			</div>

			<div class="col-md-6">
				<p class="text">
					@if (App::getLocale() == 'en')
						We tailor unique solutions for every project based on the client need and demand. Below a few examples of project that demonstrate the result of our involvement. 
					@else
						Cada projeto é único e exige soluções específicas para atender as demandas do cliente. Confira.

					@endif				
				</p>
			</div>

		</div>

	</div>

</section>
