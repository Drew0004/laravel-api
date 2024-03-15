<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Montserrat';
            }
            .container{
                max-width: 800px;
                margin: 0 auto;
            }
        </style>
    </head>

    <body>
        <main>
            <div class="container">
                @yield('content')
            </div>

        </main>
    </body>
</html>