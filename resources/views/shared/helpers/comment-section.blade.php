<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Коментари ({!! $comments ? count($comments) : '0' !!})</h4>
    </div>

    <div class="panel-body">
        @include('shared.helpers.show-comments', [
          'type' => $type
        ])
    </div>
    <div class="panel-footer">
        @include('shared.forms.add-comment', [
          'post_id' => $postId,
          'post_type' => $type
        ])
    </div>
</div>