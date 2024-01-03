<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Show</h1>
<ul class="list-group">
  <li class="list-group-item">BookName: {{ $book1->bookname }}</li>
  <li class="list-group-item">Info: {{ $book1->info }}</li>
  <li class="list-group-item">Year: {{ $book1->years }}</li>
  <li class="list-group-item">Author: {{ $book1->author->author }}</li>
</ul>
<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>

</body>
</html>