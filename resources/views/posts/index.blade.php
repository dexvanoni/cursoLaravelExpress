@extends('template')

@section('content')

  Blog

  @foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>

    <h3>Comments</h3>
    @foreach ($post->comments as $comment)
      <b>Name:</b>{{ $comment->name }}<br>
      <b>Comment:</b>{{ $comment->coment }}
    @endforeach
    <hr>
  @endforeach

@endsection
