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
				    {{ \Carbon\Carbon::createFromTimeStamp(strtotime($poem->created_at))->diffForHumans()  }}
				</div>

			</div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Коментари ({!! $comments ? count($comments) : '0' !!})</h4>
                </div>

                <div class="panel-body">
                    @if($comments)
                        @foreach($comments as $comment)
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>{{ $comment->first_name }} {{ $comment->family_name }}</strong>
                                    <p>{{ $comment->comment_content }}</p>
                                    <span class="text-muted">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($comment->created_at))->diffForHumans() }}</span>
                                    @if(Auth::user()->role == 'administrator')
                                        <a class="pull-right" href="/admin/poem/comment/{{ $comment->id }}">Изтрий</a>
                                    @endif
                                </div>
                            </div>
                            <hr/>
                        @endforeach
                        <div>
                            {!! $comments->appends(['sort' => 'created_at'])->render() !!}
                        </div>
                    @else
                        За момента няма коментари
                    @endif
                </div>
                <div class="panel-footer">
                    @include('shared.forms.add-comment', [
                        'post_id' => $poem->id,
                        'post_type' => 'poem'
                    ])
                </div>
            </div>
		</div>
	</div>
</div>
@endsection