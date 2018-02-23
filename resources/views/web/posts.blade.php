@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <h1>Lista de artigos</h1>
      @foreach($posts as $post)
      <div class="panel panel-default">
        <div class="panel-heading">
          {{ $post->name }}
        </div>
        <div class="panel-body">
          @if($post->file)
          <img src="{{ $post->file }}" class="img-fluid">
          @endif
          {{ $post->excerpt }}
          <a href="{{ route('post', $post->slug) }}" class="pull-right">Ler mais</a>
        </div>
      </div>
      @endforeach
      {{ $posts->render() }}
    </div>
  </div>
</div>
@endsection