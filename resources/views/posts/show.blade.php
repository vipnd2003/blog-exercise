@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">{{ $post->title }}</div>
                  <div class="panel-body">{{ $post->content}}</div>
                  <div class="panel-body">
                      <img src="{{ asset($post->featured) }}" style="width: 100%;">
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection
