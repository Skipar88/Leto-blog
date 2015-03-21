@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				    <h2>{!! $poem->poem_title !!}</h2>
				</div>

				<div class="panel-body">
					<p>
					    {!! $poem->poem_content !!}
       				</p>

				</div>
				<div class="panel-footer">
				    @include('shared.helpers.carbon-date', [
                        'date' => $poem->created_at
                    ])
				</div>

			</div>

            @include('shared.helpers.comment-section', [
                'postId' => $poem->id,
                'type' => 'poem'
            ])
		</div>
	</div>
</div>
@endsection