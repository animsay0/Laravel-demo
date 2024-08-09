@extends('layouts.post')


@section('content')

<h3 class="text-2xl">{{$post->title}}</h3>

<p>{{$post->description}}</p>

<div class="flex justify-end mt-4">
    <a href="{{route('posts.index')}}">
        <button class="btn btn-primary">Back</button>

    </a>
</div>

@endsection