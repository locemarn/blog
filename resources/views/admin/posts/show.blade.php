@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Show Post
          </div>

          <div class="panel-body">
            <p><strong>Nome</strong>{{ $post->name }}</p>
            <p><strong>Slug</strong>{{ $post->slug }}</p>
            <p><strong>Slug</strong>{{ $post->body }}</p>
          </div>
          
          <div class="panel-body">
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection