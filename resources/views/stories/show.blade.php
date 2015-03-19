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
            				    {{ \Carbon\Carbon::createFromTimeStamp(strtotime($story->created_at))->diffForHumans()  }}
            				</div>

            			</div>

            			<div class="panel panel-default">
            			    <div class="panel-heading">
                                <h4>Коментари ({!! $comments ? count($comments) : '0' !!})</h4>
                            </div>

                            <div class="panel-body">
                                @if($comments)
                                    @foreach($comments as $comment)
                                        {{ $comment->comment_content }}
                                    @endforeach
                                @else
                                    За момента няма коментари
                                @endif
                            </div>
                            <div class="panel-footer">
                                @include('shared.forms.add-comment', [
                                    'post_id' => $story->id,
                                    'post_type' => 'story'
                                ])
                            </div>
            			</div>
		</div>
	</div>
</div>
@endsection