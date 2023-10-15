<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Listado</h1>
@foreach ($post as $post)
    <li>{{$post->title}}</li>
    @endforeach
    <p><strong>{{ $post['id'] }}</strong></p>
    <a href="">{{ $post['title'] }}</a>
</body>
</html>
