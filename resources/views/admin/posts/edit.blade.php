@extends('template')

@section('content')

  <h1>Edit Post: {{ $post->title }}</h1>


  {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

  @include('admin.posts._form')

   <div class="form-group">
     {!! Form::submit('Save Edit', ['class'=>'btn btn-primary']) !!}
   </div>

  {!! Form::close() !!}
  @if ($errors->any())

    <ul class="alert">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>

  @endif

@endsection
