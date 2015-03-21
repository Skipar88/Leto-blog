@if($comments)
    @foreach($comments as $comment)
        <div class="row">
            <div class="col-md-12">
                <strong>{{ $comment->first_name }} {{ $comment->family_name }}</strong>
                <p>{{ $comment->comment_content }}</p>
                <span class="text-muted">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($comment->created_at))->diffForHumans() }}</span>
                @if(Auth::user() && Auth::user()->role == 'administrator')
                    <a class="pull-right" href="/admin/{!! $type !!}/comment/{{ $comment->id }}">Изтрий</a>
                @endif
            </div>
        </div>
        <hr/>
    @endforeach
    {!! $comments->appends(['sort' => 'created_at'])->render() !!}
@else
    За момента няма коментари
@endif