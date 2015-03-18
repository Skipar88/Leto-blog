@extends('shared.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                    <script type="text/javascript">
                      var onloadCallback = function() {
                        alert("grecaptcha is ready!");
                      };
                    </script>
                    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

                    {!! Form::open([
                    	'method' => 'POST',
                    	'class' => 'form-horizontal',
                    	'role'  => 'form'
                    	])
                    !!}

                    	<div class="form-group">
                    		{!! Form::label('first_name', 'Първото име', [
                    			'class' => 'col-md-4 control-label'
                    			])
                    		!!}
                    		<div class="col-md-6">
                    			{!! Form::text('first_name', old('first_name'), [
                    				'class' => 'form-control'
                    				])
                    			!!}
                    		</div>
                    	</div>


                    	<div class="form-group">
                    		{!! Form::label('family_name', 'Фамилия', [
                    			'class' => 'col-md-4 control-label'
                    			])
                    		!!}
                    		<div class="col-md-6">
                    			{!! Form::text('family_name', old('family_name'), [
                    				'class' => 'form-control'
                    				])
                    			!!}
                    		</div>
                    	</div>

                    	<div class="form-group">
                    		{!! Form::label('email', 'Имейл адрес', [
                    			'class' => 'col-md-4 control-label'
                    			])
                    		!!}
                    		<div class="col-md-6">
                    			{!! Form::text('email', old('email'), [
                    				'class' => 'form-control'
                    				])
                    			!!}
                    		</div>
                    	</div>

                    	<div class="form-group">
                    		{!! Form::label('password', 'Парола', [
                    			'class' => 'col-md-4 control-label'
                    			])
                    		!!}
                    		<div class="col-md-6">
                    			{!! Form::password('password', [
                    				'class' => 'form-control'
                    				])
                    			!!}
                    		</div>
                    	</div>

                    	<div class="form-group">
                    		{!! Form::label('password_confirmation', 'Потвърждение на паролата', [
                    			'class' => 'col-md-4 control-label'
                    			])
                    		!!}
                    		<div class="col-md-6">
                    			{!! Form::password('password_confirmation', [
                    				'class' => 'form-control'
                    				])
                    			!!}
                    		</div>
                    	</div>
                    	<div class="form-group">
                    		<div class="col-md-6 col-md-offset-4">
                    			{!! Recaptcha::render() !!}
                    		</div>
                    	</div>
                    	<div class="form-group">
                    		<div class="col-md-6 col-md-offset-4">
                    			{!! Form::submit('Регистрация', [
                    				'class' => 'btn btn-primary'
                    				])
                    			!!}
                    		</div>
                    	</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('head-content')
	<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection