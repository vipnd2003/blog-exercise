@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail" style="background: white">
                      <img src="{{ asset($post->featured) }}" style="width: 100%; height: 255px">
                      <div class="caption">
                          <h4>{{ $post->title }}</h4>
                          <p style="height:60px; line-height:20px; overflow:hidden;">{{ $post->content }}</p>
                          <p><a class="btn btn-default" href="{{ route('posts.show', $post->id) }}" role="button">View details »</a></p>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
