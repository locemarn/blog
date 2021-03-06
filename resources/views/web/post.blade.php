@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <h1>{{ $post->name }}</h1>
      
      <div class="panel panel-default">
        <div class="panel-heading">
          Categoria
        <a href="{{ route('category', $post->category->slug) }}"> {{ $post->category->name }}</a>
        </div>
        <div class="panel-body">
          @if($post->file)
          <img src="{{ $post->file }}" class="img-fluid">
          @endif
          <strong>Excerpt:</strong>
          {{ $post->excerpt }}
          <hr>
          <strong>Body:</strong>
          {!! $post->body !!}
          <hr>
          <strong>Tags</strong>
          @foreach($post->tags as $tag)
          <a href="{{ route('tag', $tag->slug) }}">
            {{ $tag->name }}
          </a>
          @endforeach
        </div>
      </div>
      
      
    </div>
  </div>
</div>
@endsection