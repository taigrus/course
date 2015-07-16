<!DOCTYPE html>
<html>
    <head>
        {!! Html::style('assets/css/bootstrap.css') !!}
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .subtitle {
                font-size: 36px;
            }

            .links{
                font-size: 56px;
                text-decoration: none;
                color: #000000;
                text
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Consejo de Salud Rural Andino
                    <p class="subtitle">La Paz - Bolivia - 2015</p>
                    {!! link_to_route('home', 'Inicio','',['class' => 'links']) !!}
                </div>
            </div>
        </div>
    </body>
</html>
