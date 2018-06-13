@if (Auth::user()->is_favoriting($micropost->id))
    {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Favorited', ['class' => "btn btn-warning active btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn  btn-xs"]) !!}
    {!! Form::close() !!}
@endif
