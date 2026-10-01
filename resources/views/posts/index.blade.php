<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Daftar Post</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @foreach($posts as $post)
        <div style="margin-bottom: 20px;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <small>Author: {{ $post->user->name }}</small>

            <br><br>

            <a href="{{ route('posts.edit', $post) }}">
                Edit
            </a>

            <form action="{{ route('posts.destroy', $post) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Delete
                </button>
            </form>
        </div>
    @endforeach
</body>
</html>