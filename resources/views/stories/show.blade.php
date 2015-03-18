@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					{{ $story->story_title }}
					<br>
					{{ $story->story_content }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection