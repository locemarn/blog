{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
  {{ Form::label('category_id', 'Categories') }}
  {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('name', 'Tag name') }}
  {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
  {{ Form::label('slug', 'Friendly URL') }}
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
  {{ Form::label('image', 'Image') }}
  {{ Form::file('file') }}
</div>
<div class="form-group">
  {{ Form::label('status', 'Status') }}
  <label>
    {{ Form::radio('status', 'PUBLISHED') }} Published
  </label>
  <label>
    {{ Form::radio('status', 'DRAFT') }} Draft
  </label>
</div>
<div class="form-group">
  {{ Form::label('tags', 'Tags') }}
  <div>
    @foreach($tags as $tag)
    <label>
      {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
    </label>
    @endforeach
  </div>
</div>
<div class="form-group">
  {{ Form::label('excerpt', 'Excerpt') }}
  {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
  {{ Form::label('body', 'Description') }}
  {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $("#name, #slug").stringToSlug({
      callback: function(text){
        $("#slug").val(text)
      }
    })
  })
</script>
@endsection