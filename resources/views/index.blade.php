<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Sử dụng hàm asset để tạo đường dẫn đến tệp tin CSS Bootstrap -->
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons-1.11.2/font/bootstrap-icons.css') }}" rel="stylesheet">

</head>
<body>
    @if(Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
    @endif
  <h1>List book</h1>
  <a href="http://127.0.0.1:8000/books/create" class="btn btn-primary">Thêm</a>
  <hr>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Book Name</th>
                <th scope="col">Info</th>
                <th scope="col">Year</th>
                
            </tr>
        </thead>
        <tbody>
            <!-- Lặp qua danh sách tài khoản và hiển thị thông tin -->
            @foreach($books as $book)
                <tr>
                    <td scope="row">{{ $book->id }}</td>
                    <td>{{ $book->bookname }}</td>
                    <td>{{ $book->info }}</td>
                    <td>{{ $book->years  }}</td>
                    <td><a class="btn btn-warning bi bi-pencil" href="http://127.0.0.1:8000/books/{{ $book->id }}/edit"></a></td>
                    <td>
                        <form action="http://127.0.0.1:8000/books/{{ $book->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="" type="submit"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                    <td><a class="bi bi-eye" href="http://127.0.0.1:8000/books/{{ $book->id }}"></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @for ($i = 1; $i <= $totalPages; $i++)
                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/books?page={{ $i }}">{{ $i }}</a></li>
            @endfor
        </ul>
    </nav>

    <!-- Sử dụng hàm asset để tạo đường dẫn đến tệp tin JS Bootstrap -->
    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>