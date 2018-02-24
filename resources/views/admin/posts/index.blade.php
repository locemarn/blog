@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Post List
            <a href="{{ route('posts.create') }}" 
            class=" float-right btn btn-sm btn-primary ">
              Create
            </a>
          </div>
          
          <div class="panel-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Name</th>
                  <th colspan="3">&nbsp</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->name }}</td>
                  <td width="10px">
                    <a href="{{ route('posts.show', $post->id) }}" 
                        class="btn bt-sm btn-outline-secondary">
                        See
                      </a>
                    </td>
                    <td width="10px">
                      <a href="{{ route('posts.edit', $post->id) }}" 
                          class="btn bt-sm btn-outline-secondary">
                          edit
                        </a>
                      </td>
                      <td width="10px">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 
                        'method' => 'DELETE'])  !!}
                          <button class="btn btn-sm btn-danger">
                            Deletar
                          </button>
                        {!! Form::close() !!}
                      </td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $posts->render() }}
              </div>
            </div>
      </div>
    </div>
  </div>
@endsection