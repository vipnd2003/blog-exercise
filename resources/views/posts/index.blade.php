@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (count($posts) > 0)
                            <table class="table table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Editing</th>
                                    <th>Deleting</th>
                                    <th>Status</th>
                                </thead>

                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->user->name }}</td>
                                            <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                                            <td><p style="height:60px; line-height:20px; overflow:hidden;">{{ $post->content }}</p></td>
                                            <td><img src="{{ asset($post->featured) }}" style="width: 70px; height: 70px"></td>
                                            <td>
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-xs btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <form onsubmit="return confirm('Do you really want to delete?');" action="{{ route('posts.destroy', $post->id)}}" method="POST" >
                                        						{{ csrf_field() }}
                                        						<input type="hidden" name="_method" value="DELETE" />
                                        						<button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                      					</form>
                                            </td>
                                            <td>
                                                @if ($post->is_checked)
                                                    Checked
                                                @else
                                                    Pending
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            No posts
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
