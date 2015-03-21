@extends('shared.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Забравена парола</div>
				<div class="panel-body">
					@include('shared.helpers.success-message')

					@include('errors.input-errors')

					@include('shared.forms.forgot-password-form')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
