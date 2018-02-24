@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Post Category
          </div>

          <div class="panel-body">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 
            'method' => 'PUT']) !!}
              @include('admin.posts.partials.form')
            {!! Form::close() !!}
          </div>
          
          <div class="panel-body">
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection