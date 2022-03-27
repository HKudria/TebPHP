<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Data from link <a href="{{$link}}">{{$link}}</a></h1>
    @foreach($jsonData as $key)
     {{$key->id}}<br>
     {{$key->title}}<br>
     {{$key->body}}<br>
     <hr>
    @endforeach
</body>
</html>
