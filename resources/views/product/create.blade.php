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
        <div class="main-page3-container__block-img ">

            {{ HTML::ul($errors->all()) }}

            {{ Form::open(array('url' => 'product')) }}

            <div class="main-page3-container__block-flex main-page3-container__block-top">
                <div class="disNon" id='numberTovar'>

                </div>
                <div class="block-flex__text ">
                    Категория
                </div>
                {{ Form::select('category', $categories, Request::old('category'), array('class' => 'block-flex__select', 'id' => 'kategoria')) }}
            </div>
            <div class="main-page3-container__block-flex">
                <div class="block-flex__text">
                    Материал
                </div>
                {{ Form::select('material', $materials, Request::old('material'), array('class' => 'block-flex__select', 'id' => 'material')) }}
            </div>

            <div class="main-page3-container__block-flex model-choise" id="komodi">
                <div class="block-flex__text">
                    Модель
                </div>
                <select name="model_komodi" class="block-flex__select">
                    <option value="">Выберите модель</option>
                    <option>Комод Палермо</option>
                    <option>ТВ тумба Моника 30</option>
                </select>
            </div>
            <div class="main-page3-container__block-flex model-choise" id="kitchen">
                <div class="block-flex__text">
                    Модель
                </div>
                <select name="model_kitchen" class="block-flex__select">
                    <option value="">Выберите модель</option>
                    <option>Кухня прямая Палермо</option>
                    <option>Кухонный гарнитур Алиса</option>
                    <option>Кухонный гарнитур Летний</option>
                    <option>Кухонный гарнитур Анна</option>
                </select>
            </div>
            <div class="main-page3-container__block-flex model-choise" id="shkaf">
                <div class="block-flex__text">
                    Модель
                </div>
                <select name="model_shkaf" class="block-flex__select">
                    <option value="">Выберите модель</option>
                    <option>Шкаф Моника с зеркалом</option>
                    <option>Барокко</option>
                    <option>Гостиная Стенка Скарлет</option>
                    <option>Гостиная Стенка Скарлет 33</option>
                </select>
            </div>
            <div class="main-page3-container__block-flex model-choise" id="myagkaya">
                <div class="block-flex__text">
                    Модель
                </div>
                <select name="model_myagkaya" class="block-flex__select">
                    <option>Уютный диван</option>
                    <option>Полудиван Моника с пуфом</option>
                    <option>Угловой диван Моника</option>
                    <option>Угловой диван Моника</option>
                    <option>Диван прямой Адель</option>
                    <option>Диван Грация</option>
                    <option>Диван прямой Танго</option>
                    <option>Диван прямой Лилия</option>
                    <option>Диван Комфорт Люкс</option>
                    <option>Диван прямой Аккордеон</option>
                </select>
            </div>
            <div class="main-page3-container__block-flex model-choise" id="stulia">
                <div class="block-flex__text">
                    Модель
                </div>
                <select name="model_stulia" class="block-flex__select">
                    <option>Небольшой табурет с мягким сиденьем</option>
                    <option>Стул 1</option>
                    <option>Стул 2</option>
                </select>
            </div>
            <div class="main-page3-container__block-flex model-choise" id="stoli">
                <div class="block-flex__text">
                    Модель
                </div>
                <select name="model_stoli" class="block-flex__select">
                    <option>Обеденная группа Версаче</option>
                    <option>Обеденная группа Барокко</option>
                    <option>Обеденный стол Колизей</option>
                    <option>Обеденная группа 1</option>
                    <option>Обеденная группа 2</option>
                    <option>Обеденная группа 3</option>
                </select>
            </div>
            <div class="main-page3-container__block-flex model-choise" id="spalnaya">
                <div class="block-flex__text">
                    Модель
                </div>
                <select name="model_spalnaya" class="block-flex__select">
                    <option>Кровать двуспальная Моника</option>
                    <option>Спальный гарнитур БАРОККО</option>
                    <option>Кровать Луиза</option>
                    <option>Спальный гарнитур Палермо</option>
                    <option>Спальный гарнитур Моника 32</option>
                    <option>Спальный гарнитур «Азалия»</option>
                    <option>Кровать двухъярусная</option>
                    <option>Кровать Алина (двуспальная)</option>
                </select>
            </div>

            <div class="main-page3-container__block-flex">
                <div class="block-flex__text">
                    Вид набивки
                </div>
                {{ Form::select('filling_type', $fillings, Request::old('filling_type'), array('class' => 'block-flex__select', 'id' => 'nabivka')) }}
            </div>
            <div class="main-page3-container__block-flex">
                <div class="block-flex__text">
                    Размеры :
                </div>
            </div>
            <div class="main-page3-container__block-flex_column">
                <div class="main-page3-container__block-flex ">
                    <div class="block-flex__text">
                        Ширина
                    </div>
                    {{ Form::number('width', Request::old('width'), ['class' => 'block-flex__input', 'id' => 'width']) }}
                </div>
                <div class="main-page3-container__block-flex ">
                    <div class="block-flex__text">
                        Высота
                    </div>
                    {{ Form::number('height', Request::old('height'), ['class' => 'block-flex__input', 'id' => 'height']) }}
                </div>
            </div>
            <div class="main-page3-container__block-flex">
                <div class="block-flex__text">
                    Цвет :
                </div>
                {{ Form::select('color', $colors, Request::old('color'), array('class' => 'block-flex__select', 'id' => 'colors')) }}
            </div>
            <div class="button-add" id='addButton'>
                <button type="submit" class="button-add__container">
                    добавить
                </button>
            </div>

            {{ Form::close() }}
        </div>

    </div>

</div>

</body>
</html>
