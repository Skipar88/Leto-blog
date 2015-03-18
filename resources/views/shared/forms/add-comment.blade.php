@if(Auth::user())

    {!! Form::open([
        'url' => $post_type . '/comment',
        'class' => 'row form-inline'
    ]) !!}
        <div class="form-group col-md-10">
            {!! Form::text('comment_content', null, [
                'class' => 'form-control',
                'style' => 'width: 100% !important',
                'placeholder' => 'Вашия коментар тук.'
            ]) !!}
        </div>

        <div class="form-group col-md-2">
            {!! Form::hidden('post_id', $post_id) !!}
            {!! Form::submit('Публикувай', [
                'class' => 'btn btn-default'
            ]) !!}
        </div>
    {!! Form::close() !!}

@else

    Трябва да влезеш в акаунта си за да може да напишеш коментар(<a href="/auth/login">Вход</a>/<a href="/auth/register">Регистрация</a>)

@endif