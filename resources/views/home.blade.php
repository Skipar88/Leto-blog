@extends('shared.layout')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Начало</div>
				<div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/img/book1.png" class="img-responsive" padding='left'>
                            </div>
                            <div class="col-md-5">
                                <p>Нищо не е лесно в този живот , но ако се отдадеш на нещо и вложиш в него много любов , то винаги се получава прекрасно .</p>

                                <p>Казват ми , че писането ми се отдава, може би е така.Просто аз влагам сърце и душа във всичко написано , вдъхвам и на него живот.</p>

                                <p>В другите страници, може да видите моите творения.</p>
                            </div>
                                @include('shared.helpers.facebook-like-body')
                            <div class="col-md-offset-3"></div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('head-content')
    @include('shared.helpers.facebook-like-head')
@endsection