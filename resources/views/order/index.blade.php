<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
            type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Все заказы</title>

    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="main-page3-container">
    <div class="main-page3-container__block ">
        <div class="main-page4-container__block-img ">
            <div class="main-page4-container__block-container">
                <img src="{{ asset('css/mial.png') }}" class="page4-img-mial">
                <div class="main-page4-container__title-text">
                    Заказы
                </div>

                <div class="table-block flex-table-page5">
                    <div class="table-block__page5 table-block__page5_padding">
                        <div class="table-block__page5-item">Номер Заказа</div>
                        <div class="table-block__page5-item">Дата</div>
                        <div class="table-block__page5-item table-block_border-right">Статус</div>
                    </div>
                    <div class="table-block__page5 table-block__page5-scroll">

                        @foreach($orders as $value)
                            <div class="page5-table-flex-select">
                                <div class="table-block__page5-item">
                                    {{ $value->id  }}
                                </div>
                                <div class="table-block__page5-item">
                                    {{ $value->created_at->format('d.m.Y') }}
                                </div>
                                <div class="table-block__page5-item">
                                    {{ $value->status  }}
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="button-add-page4">
                    <a href="/order/create">
                        <button class="button-add__container">
                            Добавить новый
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
