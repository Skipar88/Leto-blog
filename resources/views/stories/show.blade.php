@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h2>{!! $story->story_title !!}</h2>
                </div>

                <div class="panel-body">
                    <p>
                        {!! $story->story_content !!}
                    </p>

                </div>
                <div class="panel-footer">
                    @include('shared.helpers.carbon-date', [
                        'date' => $story->created_at
                    ])
                </div>

            </div>

            @include('shared.helpers.comment-section', [
                'postId' => $story->id,
                'type' => 'story'
            ])
		</div>
	</div>
</div>
@endsection