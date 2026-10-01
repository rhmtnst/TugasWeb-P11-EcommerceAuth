<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>

    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>

        <br>

        <div>
            <label>Body</label>
            <textarea name="body">{{ $post->body }}</textarea>
        </div>

        <br>

        <button type="submit">Update</button>
    </form>

</body>
</html>