@extends('shared.layout')

@section('content')
<div id="fb-root"></div>
                               <script>(function(d, s, id) {
                                 var js, fjs = d.getElementsByTagName(s)[0];
                                 if (d.getElementById(id)) return;
                                 js = d.createElement(s); js.id = id;
                                 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=184680861655397&version=v2.0";
                                 fjs.parentNode.insertBefore(js, fjs);
                               }(document, 'script', 'facebook-jssdk'));</script>
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
                            <div class="col-md-offset-3"></div>
                            <div class="col-md-12">
                                <div class="fb-like-box" data-href="https://www.facebook.com/slubovotleto" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('head-content')

@endsection