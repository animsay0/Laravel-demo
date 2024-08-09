@extends('layouts.app')

@section('content')

<div class="mb-4">
    <a href="{{route('posts.index')}}">
        <button class="btn btn-sm btn-default">Back</button>

    </a>
</div>

<form method="POST" action="{{route('posts.store')}}">
    <!-- <form> -->

    @csrf

    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">Title</span>
        </div>
        <input name="title" value="{{old('title')}}" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
        @error('title')
            <p class="mt-1 text-error">{{$message}}</p>
        @enderror
    </label>

    <label class="form-control">
        <div class="label">
            <span class="label-text">Description</span>
        </div>
        <textarea name="description" class="textarea textarea-bordered h-24" placeholder="Bio"> {{old('description')}}</textarea>
        @error('description')
            <p class="mt-1 text-error">{{$message}}</p>
        @enderror
    </label>

    <button class="mt-4 btn btn-primary">Sumbit</button>

</form>

@endsection