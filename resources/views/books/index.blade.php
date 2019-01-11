<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>Projects</h1>

<ul>
    @foreach ($books as $book)
        <li><a href="/books/{{ $book->id }}">{{ $book->title }}</a></li>
    @endforeach
</ul>
</body>
</html>