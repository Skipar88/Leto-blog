@extends('shared.layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
				    <h2>{{ $poem->poem_title }}</h2>
				</div>

				<div class="panel-body">
					<p>
					    {{ $poem->poem_content }}
       				</p>

				</div>
				<div class="panel-footer">
				    {{ \Carbon\Carbon::createFromTimeStamp(strtotime($poem->created_at))->diffForHumans()  }}
				</div>

			</div>

			<div class="panel panel-default">
			    <div class="panel-heading">
                    <h4>Коментари (2)</h4>
                </div>

                <div class="panel-body">
                    <p>
                        {{ $poem->poem_content }}
                    </p>

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