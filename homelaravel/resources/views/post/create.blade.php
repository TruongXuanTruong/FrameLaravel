<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Place the first <script> tag in your HTML's <head> -->
        <script src="https://cdn.tiny.cloud/1/rvv8qhfazsllrdan1lrx58qpxvxfcp9ac2ee6abqrhcc1ia4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->


        <title>View Mới</title>
    </head>
    <body>
        <script>
            // tinymce.init({
            //   selector: 'textarea',
            //   plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            //   toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            //   tinycomments_mode: 'embedded',
            //   tinycomments_author: 'Author name',
            //   mergetags_list: [
            //     { value: 'First.Name', title: 'First Name' },
            //     { value: 'Email', title: 'Email' },
            //   ],
            //   ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
            // });
            var editor_config = {
            path_absolute : "http://127.0.0.1:8000/",
            selector: 'textarea',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
          </script>
          <textarea>
            Welcome to TinyMCE!
          </textarea>
        <div class="container">
            <h1>Thêm Bài Viết</h1>
            {{-- @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $errors)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif --}}
            {!! Form::open(['route' => 'posts.store','method' => 'POST']) !!}
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
                    {!! Form::file('file', ['class'=>'form-control-file']) !!}
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
