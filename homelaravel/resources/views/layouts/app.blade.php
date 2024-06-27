<!doctype html>
<html lang="en">
    <head>
        <title>@yield('Xuân Trường')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div id="warpper">
            <div id="header">
                <h1>Header</h1>
            </div>
            <div id="wp-content">
                <div id="content">
                    @yield('content')
                </div>
                <div id="sidebar">
                    @section('sidebar')
                    @show
                </div>
            </div>
            <div id="footer">
                <h1>Footer</h1>
            </div>
        </div>
    </body>
</html>
