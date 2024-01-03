<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<h1>Edit</h1>
<hr>

<form action="/books/{{ $book->id }}" method="POST">
@csrf
@method('PUT')
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" name="bookname" value="{{ $book->bookname }}" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">info</label>
    <input type="text" class="form-control" name="info" value="{{ $book->info }}"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Years</label>
    <input type="text" class="form-control" value="{{ $book->years }}" name="years" >
  </div>
  <div class="mb-3">
    <select class="form-select " aria-label="Default select example" name="author_id" required>
        <option selected value="{{ $book1->author->id  }}">{{ $book1->author->author}}</option>
        @foreach($authors as $author)
        <option value="{{ $author->id  }}">{{ $author->author}}</option>
        @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
