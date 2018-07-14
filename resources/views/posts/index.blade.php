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
                        <th>Editing</th>
                        <th>Deleting</th>
                        <th>Status</th>
                    </thead>

                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td><img src="{{ asset($post->featured) }}" style="width: 50px; height: 50px"></td>
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
@endsection
