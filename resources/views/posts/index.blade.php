@extends('layouts.app')

@section('content')
<div class="container">
@foreach($posts as $posts)
<div class="row">
<div class="col-6 offset-3">
<a href="/profile/{{$post->user-id}}"><img src="/storage/{{$post->image}}" alt="" class="w-100"></a>
</div>
<div class="row pt-2 pb-4">
<div class="col-6 offset-3">
<p><span class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</a></span>{{$post->caption}}</p>
</div>
</div>
</div>
</div>
@endforeach
</div>
@endsection
