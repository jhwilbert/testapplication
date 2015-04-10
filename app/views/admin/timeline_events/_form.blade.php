
{{ Form::model($timeline_event, array('route' => $route, 'method' => $method, 'class' => 'form-horizontal', 'role' => 'form', 'files' => true)) }}
    
	<div class="form-group">
		<?php $error_class = ($errors->first('date')) ? ' has-error' : ''; ?>
		{{ Form::label('date', Lang::get('validation.attributes.date'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-3<?php echo $error_class ?>">
			{{ Form::text('date', ($timeline_event->date) ? date('d/m/Y', strtotime($timeline_event->date)) : '', array('class' => 'form-control', 'placeholder' => 'dd/mm/aaaa')) }}
		</div>
		<div class="col-sm-6"></div>
	</div>
    
	<div class="form-group">
		<?php $error_class = ($errors->first('title')) ? ' has-error' : ''; ?>
		{{ Form::label('title', Lang::get('validation.attributes.title'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>
	</div>
    
	<div class="form-group">
		<?php $error_class = ($errors->first('title_en')) ? ' has-error' : ''; ?>
		{{ Form::label('title_en', Lang::get('validation.attributes.title', array(), 'en'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::text('title_en', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		<?php $error_class = ($errors->first('file')) ? ' has-error' : ''; ?>
		{{ Form::label('file', Lang::get('validation.attributes.file'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::file('file', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('text', Lang::get('validation.attributes.text'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::textarea('text', null, array('class' => 'form-control ')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('text_en', Lang::get('validation.attributes.text', array(), 'en'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::textarea('text_en', null, array('class' => 'form-control ')) }}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<div class="checkbox">
				<label>
					{{ Form::checkbox('active') }} {{ Lang::get('validation.attributes.active') }}
				</label>
			</div>
		</div>
	</div>
	<p><br></p>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg')) }}
			{{ link_to_route('admin.timeline_events.index', 'Cancelar', null, array('class' => 'btn btn-default')) }}
		</div>
	</div>

{{ Form::close() }}