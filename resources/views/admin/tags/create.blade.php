@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Create Tag
          </div>

          <div class="panel-body">
            {!! Form::open(['route' => 'tags.store']) !!}
              @include('admin.tags.partials.form')
            {!! Form::close() !!}
          </div>
          
          <div class="panel-body">
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection