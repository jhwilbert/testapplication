<section class="section" id="section-solutions">

	<div class="inner-content container">
		
		<h2>{{Lang::get('messages.solutions.title')}}</h2>
		<div class="intro-container">
			<h3>
				@if (Route::currentRouteName() == 'home')
					{{Lang::get('messages.home.intro_solutions')}}
				@else
					{{Lang::get('messages.solutions.intro')}}
				@endif
			</h3>
		</div>
		<div class="row solutions-row">
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/engenharia.gif') }}" alt="{{Lang::get('messages.solutions.item1.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item1.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item1.text')}}</p>
				<!-- <a href="{{ route('show_solution', array(1, App::getLocale())) }}" class="solution-plus">+</a> -->
			</div>
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/conectividade.gif') }}" alt="{{Lang::get('messages.solutions.item2.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item2.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item2.text')}}</p>
				<!-- <a href="#" class="solution-plus">+</a> -->
			</div>
			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/estudios.gif') }}" alt="{{Lang::get('messages.solutions.item3.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item3.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item3.text')}}</p>
				<!-- <a href="#" class="solution-plus">+</a> -->
			</div>

			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/estudios.gif') }}" alt="{{Lang::get('messages.solutions.item3.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item4.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item4.text')}}</p>
				<!-- <a href="#" class="solution-plus">+</a> -->
			</div>


			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/estudios.gif') }}" alt="{{Lang::get('messages.solutions.item3.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item5.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item5.text')}}</p>
				<!-- <a href="#" class="solution-plus">+</a> -->
			</div>

			<div class="col-md-4">
				<div class="solution-image">
					<img src="{{ asset('public/img/solutions/estudios.gif') }}" alt="{{Lang::get('messages.solutions.item3.title')}}">
				</div>
				<h4>{{Lang::get('messages.solutions.item6.title')}}</h4>
				<p>{{Lang::get('messages.solutions.item6.text')}}</p>
				<!-- <a href="#" class="solution-plus">+</a> -->
			</div>


		</div>
	</div>

</section>