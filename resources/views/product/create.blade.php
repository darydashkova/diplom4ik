@extends('layouts.app')

@section('content')
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'product')) }}

    @if(isset($orderId))
        {{ Form::hidden('orderId', $orderId)  }}
    @endif
    <div class="form-group">
        {{ Form::label('name', 'Категория') }}
        {{ Form::text('category', Request::old('category'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Вид') }}
        {{ Form::text('type', Request::old('type'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Вид набивки') }}
        {{ Form::text('filling_type', Request::old('filling_type'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Цвет') }}
        {{ Form::text('color', Request::old('color'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Материал') }}
        {{ Form::text('material', Request::old('material'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Модель') }}
        {{ Form::text('model', Request::old('model'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Высота') }}
        {{ Form::text('height', Request::old('height'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Ширина') }}
        {{ Form::text('width', Request::old('width'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Добавить товар', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
