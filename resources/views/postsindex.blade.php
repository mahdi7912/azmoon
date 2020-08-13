<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>salam</title>
</head>
<body>
    <h1>{{ $hey }}</h1>
    نعداد پست های سایت : {{ $postcount }} <br/><br/>
   @foreach ( $posts as $post )
     شناسه: {{ $post->id }}{ <br><br>
      نام : {{ $post->namees }} <br><br>
      تیتر: {{ $post->title }} <br><br>
      عدد :{{ $post->nuums }}} <br><br>
   @endforeach
   
</body>
</html>