@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				    Разкази
				</div>

				<div class="panel-body">
                    @foreach($stories as $story)
                        <container>
                            <div class="panel-title">
                                <h3>
                                    <a href="{!! url('/stories/' . $story->id) !!}">{!! $story->story_title  !!}</a>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p>{!! mb_substr($story->story_content, 0, 700) !!} <a href="{!! url('/stories/' . $story->id) !!}">...</a> </p>
                            </div>
                        </container>

                    @endforeach
                    <div class="row">
                        <div class="col-md-12">
                            {!! $stories->appends(['sort' => 'created_at'])->render() !!}
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
@endsection