<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <h1>Posts list</h1>
    <ul>
        <li>
            <a href="{{ route('posts.show',['post'=> 1]) }}">Post 1</a>
            <a href="{{ route('posts.edit',['post'=> 1]) }}"><button>EDIT</button></a>
            <form action="{{route('posts.destroy', ['post'=> 1])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
            <a href="{{ route('posts.show',['post'=> 2]) }}">Post 2</a>
            <a href="{{ route('posts.edit',['post'=> 2]) }}"><button>EDIT</button></a>
            <form action="{{route('posts.destroy', ['post'=> 2])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
            <a href="{{ route('posts.show',['post'=> 3]) }}">Post 3</a>
            <a href="{{ route('posts.edit',['post'=> 3]) }}"><button>EDIT</button></a>
            <form action="{{route('posts.destroy', ['post'=> 3])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </li>
    </ul>
</body>
</html>