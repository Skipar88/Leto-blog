@extends('shared.layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Вход</div>
				<div class="panel-body">
					@include('...errors.input-errors')

					@include('shared.forms.login-form')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
