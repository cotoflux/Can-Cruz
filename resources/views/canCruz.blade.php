<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Can Cruz</title>
</head>

<body>
    <div class="btn-book-fix">
        <span>Reserva</span>
    </div>
    <div class="container-fluid">

        <div id="start" class="row start">
            @include('_start')
        </div>

        <div id="masia" class="row masia">
            @include('_masia')
        </div>
        <div id="sleep" class="row sleep">
            @include('_sleep')
        </div>

        <div id="about" class="row aboutUs">
           @include('_aboutUs')
        </div>

        <div id="contact" class="row contact">
          @include('_contact')

    </div>

</body>


</html>
