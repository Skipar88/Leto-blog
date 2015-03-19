@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				    Поезия
				</div>

				<div class="panel-body">
					@foreach($poems as $poem)
					    <container>
					        <div class="panel-title">
					            <h3>
    					            <a href="{!! url('/poems/' . $poem->id) !!}">{!! $poem->poem_title  !!}</a>
					            </h3>
					        </div>
					        <div class="panel-body">
					            <p>{!! mb_substr($poem->poem_content, 0, 300) !!} <a href="{!! url('/poems/' . $poem->id) !!}">...</a> </p>
					        </div>
					    </container>

					@endforeach
					<div class="row">
					    <div class="col-md-3 col-md-offset-5">
					        {!! $poems->appends(['sort' => 'created_at'])->render() !!}
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection