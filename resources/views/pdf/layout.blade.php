<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
             @page
            {
                margin: 0.5cm 0.5cm;
            }

            body {
                font-size: 9px;
                font-family: 'Arial';
            }

            header {
            }

            footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
                border-top: 1px solid #000;
                text-align: center;
                line-height: 1.0cm;
            }
           table {
                border-left: 0.01em solid #aaa;
                border-right: 0;
                border-top: 0.01em solid #aaa;
                border-bottom: 0;
                border-collapse: collapse;
            }
            table td,
            table th {
                border-left: 0;
                border-right: 0.01em solid #aaa;
                border-top: 0;
                border-bottom: 0.01em solid #aaa;
            }
        </style>
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <img src="{{ asset('images/logo_upz.png') }}" align="right" width="200px">
          <br>
          <br>
          <!--  @yield('title_report') -->
          <h3> @yield('title') </h3>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    	@yield('content')
                    </div>
                </div>
            </div>
        </main>

        <footer>

            <small>ServTel  |
            <a href="#"  target="_blank">servtel</a></small>


        </footer>





    </body>
</html>
