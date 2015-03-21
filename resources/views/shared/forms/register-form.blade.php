<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

{!! Form::open([
    'method' => 'POST',
    'class' => 'form-horizontal',
    'role'  => 'form'
    ])
!!}

    <div class="form-group">
        {!! Form::label('first_name', 'Собствено име', [
            'class' => 'col-md-4 control-label'
            ])
        !!}
        <div class="col-md-6">
            {!! Form::text('first_name', old('first_name'), [
                'class' => 'form-control'
                ])
            !!}
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('family_name', 'Фамилно име', [
            'class' => 'col-md-4 control-label'
            ])
        !!}
        <div class="col-md-6">
            {!! Form::text('family_name', old('family_name'), [
                'class' => 'form-control'
                ])
            !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Имейл адрес', [
            'class' => 'col-md-4 control-label'
            ])
        !!}
        <div class="col-md-6">
            {!! Form::text('email', old('email'), [
                'class' => 'form-control'
                ])
            !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Парола', [
            'class' => 'col-md-4 control-label'
            ])
        !!}
        <div class="col-md-6">
            {!! Form::password('password', [
                'class' => 'form-control'
                ])
            !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation', 'Потвърждение на паролата', [
            'class' => 'col-md-4 control-label'
            ])
        !!}
        <div class="col-md-6">
            {!! Form::password('password_confirmation', [
                'class' => 'form-control'
                ])
            !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            {!! Recaptcha::render(['lang' => 'bg']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('Регистрация', [
                'class' => 'btn btn-primary'
                ])
            !!}
        </div>
    </div>
{!! Form::close() !!}