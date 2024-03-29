<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
        <title>Laravel - Vue</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div style="display: none; text-align: center" id="IE">
            <h1>Sorry this browser is not supported.</h1>
            <h3>Please use chrome or firefox</h3>
        </div>
        <div id="app">
            <app>
            </app>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
