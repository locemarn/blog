@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            Category List
            <a href="{{ route('categories.create') }}" 
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
                @foreach($categories as $category)
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->name }}</td>
                  <td width="10px">
                    <a href="{{ route('categories.show', $category->id) }}" 
                        class="btn bt-sm btn-outline-secondary">
                        See
                      </a>
                    </td>
                    <td width="10px">
                      <a href="{{ route('categories.edit', $category->id) }}" 
                          class="btn bt-sm btn-outline-secondary">
                          edit
                        </a>
                      </td>
                      <td width="10px">
                        {!! Form::open(['route' => ['categories.destroy', $category->id], 
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
                {{ $categories->render() }}
              </div>
            </div>
      </div>
    </div>
  </div>
@endsection