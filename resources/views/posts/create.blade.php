<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <h1>Posts CREATE</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input type="text" name="title">
        <button type="submit">Create</button>
    </form>
</body>
</html>