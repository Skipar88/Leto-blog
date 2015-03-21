{!! Form::open([
    'class' => 'form-horizontal',
    'role'  => 'form',
    'url'   => '/password/email'
]) !!}
    <div class="form-group">
        {!! Form::label('email', 'Имейл адрес', [
            'class' => 'col-md-4 control-label'
        ]) !!}
        <div class="col-md-6">
            {!! Form::email('email', old('email'), [
                'class' => 'form-control'
            ]) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('Изпращане на линк за смяна на пролата', [
                'class' => 'btn btn-primary'
            ]) !!}
        </div>
    </div>
{!! Form::close() !!}