@extends('layouts.app')

@section('template_title')
	Create New User
@endsection

@section('template_fastload_css')
	@media(min-width: 992px) {
		.horizontal-submit {
			margin-left: .5em;
		}
	}
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						Create New User
					</div>
					<div class="panel-body">

						@include('partials.form-status')

						{!! Form::open(array('action' => 'UsersManagementController@store', 'method' => 'POST', 'role' => 'form')) !!}
							{{-- -or- {!! Form::open(array('url' => url('/users'), 'method' => 'POST', 'method' => 'POST', 'role' => 'form')) !!} --}}

							{!! csrf_field() !!}

							<div class="form-group has-feedback row">
								{!! Form::label('email', Lang::get('forms.create_user_label_email'), array('class' => 'col-md-3 control-label')); !!}
								<div class="col-md-9">
								  	<div class="input-group">
								    	{!! Form::text('email', NULL, array('id' => 'email', 'class' => 'form-control', 'placeholder' => Lang::get('forms.create_user_ph_email'))) !!}
								    	<label class="input-group-addon" for="email"><i class="fa fa-fw {{ Lang::get('forms.create_user_icon_email') }}" aria-hidden="true"></i></label>
								  	</div>
								</div>
							</div>

							<div class="form-group has-feedback row">
								{!! Form::label('name', Lang::get('forms.create_user_label_username'), array('class' => 'col-md-3 control-label')); !!}
								<div class="col-md-9">
						      		<div class="input-group">
						        		{!! Form::text('name', NULL, array('id' => 'name', 'class' => 'form-control', 'placeholder' => Lang::get('forms.create_user_ph_username'))) !!}
						        		<label class="input-group-addon" for="name"><i class="fa fa-fw {{ Lang::get('forms.create_user_icon_username') }}" aria-hidden="true"></i></label>
						      		</div>
						      	</div>
							</div>

							<div class="form-group has-feedback row">
								{!! Form::label('user_level', 'User Access Level' , array('class' => 'col-md-3 control-label')); !!}
								<div class="col-md-9">
									<div class="input-group">
						        		{!! Form::select('user_level', array('0' => 'Select Access Level', '1' => 'User', '2' => 'Editor', '3' => 'Administrator'), NULL, array('class' => 'form-control')) !!}
										<label class="input-group-addon" for="user_level"><i class="fa fa-fw fa-exclamation-circle" aria-hidden="true"></i></label>
									</div>
								</div>
							</div>

							<div class="form-group has-feedback row">
								{!! Form::label('password', Lang::get('forms.create_user_label_password'), array('class' => 'col-md-3 control-label')); !!}
								<div class="col-md-9">
						      		<div class="input-group">
						        		{!! Form::password('password', array('id' => 'password', 'class' => 'form-control ', 'placeholder' => Lang::get('forms.create_user_ph_password'))) !!}
						        		<label class="input-group-addon" for="password"><i class="fa fa-fw {{ Lang::get('forms.create_user_icon_pw_confirmation') }}" aria-hidden="true"></i></label>
						      		</div>
						      	</div>
							</div>

							<div class="form-group has-feedback row">
								{!! Form::label('password_confirmation', Lang::get('forms.create_user_label_pw_confirmation'), array('class' => 'col-md-3 control-label')); !!}
								<div class="col-md-9">
						      		<div class="input-group">
						        		{!! Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => Lang::get('forms.create_user_ph_pw_confirmation'))) !!}
						        		<label class="input-group-addon" for="password_confirmation"><i class="fa fa-fw {{ Lang::get('forms.create_user_icon_pw_confirmation') }}" aria-hidden="true"></i></label>
						      		</div>
						      	</div>
							</div>
							<div class="col-md-offset-3">
								{!! Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;' . Lang::get('forms.create_user_button_text'), array('class' => 'btn btn-primary horizontal-submit','type' => 'submit')) !!}
							</div>

						{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('template_scripts')
@endsection