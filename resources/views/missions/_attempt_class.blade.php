@if($attempt->status === 'success')
alert alert-success
@elseif($attempt->status === 'almost')
alert alert-warning
@elseif($attempt->status === 'miss')
alert alert-danger
@else
alert alert-info
@endif
