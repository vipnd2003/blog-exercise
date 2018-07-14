@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Posts
        </div>

        <div class="panel-body">
            @if (count($posts) > 0)
                <table class="table table-hover">
                    <thead>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                    </thead>

                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td><img src="{{ asset($post->featured) }}" style="width: 50px; height: 50px"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                No posts
            @endif
        </div>

    </div>
@endsection
