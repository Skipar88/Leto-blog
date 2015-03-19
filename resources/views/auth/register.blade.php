@extends('shared.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">

                    @include('errors.input-error')

                    @include('shared.forms.register-form')

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

<script src='https://www.google.com/recaptcha/api.js'></script>
