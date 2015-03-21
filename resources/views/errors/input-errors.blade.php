@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Има проблем с въведените от Вас данни.</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                @if($error != 'These credentials do not match our records.' && $error != 'Please ensure that you are a human!')
                    <li>{{ $error }}</li>
                @elseif($error == 'Please ensure that you are a human!')
                    <li>Моля уверете се че не сте робот!</li>
                @else
                    <li>Грешнен имейл или парола!</li>
                @endif
            @endforeach
        </ul>
    </div>
@endif