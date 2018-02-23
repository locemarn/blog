@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Lista de Tags
            <a href="{{ route('tags.create') }}" 
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
                @foreach($tags as $tag)
                <tr>
                  <td>{{ $tag->id }}</td>
                  <td>{{ $tag->name }}</td>
                  <td width="10px">
                    <a href="{{ route('tags.show', $tag->id) }}" 
                        class="btn bt-sm btn-outline-secondary">
                        See
                      </a>
                    </td>
                    <td width="10px">
                      <a href="{{ route('tags.edit', $tag->id) }}" 
                          class="btn bt-sm btn-outline-secondary">
                          edit
                        </a>
                      </td>
                      <td width="10px">
                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 
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
                {{ $tags->render() }}
              </div>
            </div>
      </div>
    </div>
  </div>
@endsection