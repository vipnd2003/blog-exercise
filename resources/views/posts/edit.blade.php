@extends('layouts.app')

@section('content')
    @include('includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">Edit post: {{ $post->title }}</div>

        <div class="panel-body">
            <form method="POST" action="{{ route('posts.update', $post->id) }}" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" rows="5" cols="5" class="form-control">{{ $post->content }}</textarea>
                </div>

                @if (Auth::user()->role_id == 1)
                    <div class="form-group">
                        <label for="is_checked">Do you want to public this post?</label>
                        <select class="form-control" name="is_checked" id="is_checked">
                            <option value="0">Unpublic</option>
                            <option value="1">Public</option>
                        </select>
                    </div>
                @endif

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">
                            Update post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
