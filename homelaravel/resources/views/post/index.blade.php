<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>View Mới</title>
    </head>
    <body>
       <h1>Trang danh sách bài viết</h1>

       @if(session('status'))
           <div class="alert alert-success">
                {{session('status')}}
           </div>
       @endif
        <ul>
            @foreach ($posts as $post)
            <li>
                <a href="">{{$post->title}}</a> <br>
                {{-- <img src="{{url($post->thumnail)}}" alt=""> --}}
                <p>{!!$post->content!!}</p>
            </li>
            @endforeach
        </ul>

        {{$post->appends(['sort'=>'votes'])links()}}

    </body>
</html>
