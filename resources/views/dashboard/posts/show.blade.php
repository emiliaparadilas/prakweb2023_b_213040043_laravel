@extends('dashboard.layouts.main')

@section('container')
<div class="container">
<div class="row mb-3">
  <div class="col-md-8">
    <h1 class="mb-3">{{ $post->title }}</h1>

    <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i>Back to all my posts</a>
    <a href="" class="btn btn-warning"><i class="bi edit"></i>Edit</a>
    <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i>Delete</a>

    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

    <article class="my-3 fs-5">
      {!!$post->body!!}
    </article>


    <a href="/posts" class="d-block mt-3">Back to Posts</a>
  </div>
</div>
</div>
@endsection