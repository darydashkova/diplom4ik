<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
            type="text/javascript"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/print.css') }}" rel="stylesheet">
</head>
<body>
<div class="main-page3-container">
    <div class="main-page3-container__block ">
        <div class="main-page4-container__block-img ">
            <div class="main-page4-container__block-container">
                <img src="{{ asset('css/mial.png') }}" class="page4-img-mial">
                <div class="main-page4-container__title-text">
                    Заказ № <span id="number">1</span>
                </div>
                <div class="ispolnitel-block">
                    <div class="ispolnitel-block__text">
                        Исполнитель :
                    </div>
                    <div class="ispolnitel-block__name">
                        ИП Матвиенко М.П
                    </div>
                </div>
                <div class="ispolnitel-block">
                    <div class="ispolnitel-block__text">
                        Заказчик :
                    </div>
                    <div class="ispolnitel-block__name" id="company">
                        ООО “Рассвет”
                    </div>
                </div>
                <div class="table-block">
                    <table class="table-block__order">
                        <tr>
                            <th>№</th>
                            <th class="th_max-width">Товар</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Сумма</th>

                            <th class="button-teble_change border-top-none"></th>
                        </tr>

                        <tr>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="button-teble_change border-top-none"><a href='diplom-page3.html'><img
                                        src="change.png"></a></td>
                        </tr>

                    </table>

                </div>
                <div class="itog-block">
                    <div class="itog-block__container">
                        <div class="itog-block__container-item"><span>ДАТА :</span> <input id='date'>12.12.2020</input>
                        </div>
                        <div class="itog-block__container-item itog-block__container-itogo"><span>ИТОГО: </span> <span
                                id="itogo">default</span></div>

                    </div>

                </div>
                <div class="button-add-page4" id='addButton'>

                    <a href='diplom-page5.html'>
                        <button class="button-add__container" id='addPage4'>
                            добавить
                        </button>
                    </a>

                    <a class="print-doc" href="javascript:(print());">
                        <div class="button-add__container">
                            Распечатать
                        </div>
                    </a>
                </div>
                <div class="print-podpis">
                    <div class="podpis">
                        <div> ____________________
                        </div>
                        <div> Печать
                        </div>
                    </div>
                    <div class="podpis">
                        <div> ____________________
                        </div>
                        <div> Подпись
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
