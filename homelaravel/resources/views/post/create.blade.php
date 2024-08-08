<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>View Mới</title>
    </head>
    <body>
        <div class="container">
            <h1>Thêm Bài Viết</h1>
            {{-- @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $errors)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif --}}
            {!! Form::open(['url' => 'post/store','method' => 'POST']) !!}
                <div class="mb-3">
                    {!! Form::textarea('title', '', ['class'=>'form-control','placeholder'=>'Tiêu Đề']) !!}
                    @error('title')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    {!! Form::textarea('content', '', ['class'=>'form-control','placeholder'=>'Nội Dung']) !!}
                    @error('content')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    {!! Form::submit('Thêm Mới', ['name'=>'sm-add','class'=>'btn btn-dark']) !!}
                </div>
            {!! Form::close() !!}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlAI3UPSbDkwZ8f7HAI7bNXQblbHH1/VThpG5yD4OUe57kz4y4I30+JlE0I" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiSkKK9e1b6HA4kL/2zP0G8H/5rL+B6arvcOmY0TjJRQqu6B0nUPLaqE4" crossorigin="anonymous"></script>
    </body>
</html>
