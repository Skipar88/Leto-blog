{!! Form::open([
    'url' => '/auth/login',
    'class' => 'form-horizontal',
    'role' => 'form'
]) !!}

    <div class="form-group">

        {!! Form::label('email', 'Имейл адрес', [
            'class' => 'col-md-4 control-label'
        ]) !!}
        <div class="col-md-6">

            {!! Form::text('email', old('email'), [
                'class' => 'form-control',
                'id' => 'email'
            ]) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Парола', [
            'class' => 'col-md-4 control-label'
        ]) !!}
        <div class="col-md-6">
            {!! Form::password('password', [
                'class' => 'form-control',
                'id' => 'password'
            ]) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    {!! Form::checkbox('remember', false) !!} Запомни ме
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('Влез',[
                'class' => 'btn btn-primary'
            ]) !!}
            <a class="btn btn-link" href="{{ url('/password/email') }}">Забравена парола?</a>
        </div>
    </div>
{!! Form::close() !!}