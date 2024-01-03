<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<h1>Create</h1>
<hr>

<form action="/books" method="POST">
@csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">BookName</label>
    <input type="text" class="form-control" name="bookname" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Infor</label>
    <input type="text" class="form-control" name="info"  aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Years</label>
    <input type="text" class="form-control" name="years" >
    
  </div>
  <div class="mb-3">
    <select class="form-select " aria-label="Default select example" name="author_id" required>
        <option selected value="">--Chọn Tác Giả --</option>
        @foreach($authors as $author)
        <option value="{{ $author->id  }}">{{ $author->author  }}</option>
        @endforeach
        
        <!-- @error('tile')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror -->
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>