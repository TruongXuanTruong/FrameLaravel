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
            <h1>Đăng Ký</h1>
            {!! Form::open(['url' => 'user/store','method' => 'POST']) !!}
                <div class="mb-3">
                    {!! Form::label('username', 'Tên Đăng Nhập') !!}
                    {!! Form::textarea('username', '', ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('password', 'Mật Khẩu') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email','', ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('city', 'Thành Phố') !!}
                    {!! Form::select('city', [0=>'Chọn',1=>'Hà Nôi',2=>'HCM',3=>'Quảng Ninh'],'',['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('gender', 'Giới Tính') !!}
                    <div class="form-check">
                        {!! Form::radio('gender', 'male','', ['class'=>'form-check-input','id'=>'male']) !!}
                        {!! Form::label('mail', 'Nam', ['class'=>'form-check-label']) !!}
                    </div>
                    <div class="form-check">
                        {!! Form::radio('gender', 'female','checked', ['class'=>'form-check-input','id'=>'female']) !!}
                        {!! Form::label('femail', 'Nữ', ['class'=>'form-check-label']) !!}
                    </div>
                </div>
                <div class="mb-3">
                    {!! Form::label('skills', 'Kỹ Năng') !!}
                    <div class="form-check">
                        {!! Form::checkbox('skills', 'html','', ['class'=>'form-check-input','id'=>'html']) !!}
                        {!! Form::label('html', 'HTML', ['class'=>'form-check-label']) !!}
                    </div>
                    <div class="form-check">
                        {!! Form::checkbox('skills', 'css','', ['class'=>'form-check-input','id'=>'css']) !!}
                        {!! Form::label('css', 'CSS', ['class'=>'form-check-label']) !!}
                    </div>
                    <div class="form-check">
                        {!! Form::checkbox('skills', 'php','', ['class'=>'form-check-input','id'=>'php']) !!}
                        {!! Form::label('php', 'PHP', ['class'=>'form-check-label']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('birth', 'Ngày Sinh') !!}
                        {!! Form::date('birth','', ['class'=>'form-control']) !!}
                    </div>
                    <div class="mb-3">
                        {!! Form::label('intro', 'Giới Thiệu Bản Thân') !!}
                        {!! Form::textarea('intro','', ['class'=>'form-control','id'=>'intro']) !!}
                    </div>
                </div>
                <div class="mb-3">
                    {!! Form::submit('Đăng Ký', ['name'=>'sm-reg','class'=>'btn btn-dark']) !!}
                </div>
            {!! Form::close() !!}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlAI3UPSbDkwZ8f7HAI7bNXQblbHH1/VThpG5yD4OUe57kz4y4I30+JlE0I" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiSkKK9e1b6HA4kL/2zP0G8H/5rL+B6arvcOmY0TjJRQqu6B0nUPLaqE4" crossorigin="anonymous"></script>
    </body>
</html>
