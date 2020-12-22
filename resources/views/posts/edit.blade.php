<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <h1>Posts{{$id}} EDIT</h1>
    <form action="{{ route('posts.update', ['post'=>$id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title">
        <button type="submit">Edit</button>
    </form>
</body>
</html>