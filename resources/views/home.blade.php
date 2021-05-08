<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>МиАл - Мебельная фабрика</title>

    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="main-page-container">
    <img src="{{ asset('css/mial.png') }}" class="img-mial">
    <div class="main-page-container__text">
        Оформить новый заказ
    </div>
    <div  class="main-page-container-button">
        <a href="/login" class="main-page-container-button__link">
            <div class="main-page-container-button__item">
                начать
            </div>
        </a>
    </div>
</div>

</body>
</html>

