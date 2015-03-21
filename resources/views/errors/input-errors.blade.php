@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Има проблем с въведените от Вас данни.</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                @if($error != 'These credentials do not match our records.')
                    <li>{{ $error }}</li>
                @else
                    <li>Грешнен имейл или парола</li>
                @endif
            @endforeach
        </ul>
    </div>
@endif