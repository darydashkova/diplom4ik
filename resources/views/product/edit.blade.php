@extends('layouts.app')

@section('content')

    {{ HTML::ul($errors->all()) }}

    {{ Form::model($product, array('route' => array('product.update', $product->id), 'method' => 'PUT')) }}

    @if(isset($orderId))
        {{ Form::hidden('orderId', $orderId)  }}
    @endif

    <div class="form-group">
        {{ Form::label('name', 'Категория') }}
        {{ Form::text('category', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Вид') }}
        {{ Form::text('type', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Вид набивки') }}
        {{ Form::text('filling_type', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Цвет') }}
        {{ Form::text('color', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Материал') }}
        {{ Form::text('material', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Модель') }}
        {{ Form::text('model', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Высота') }}
        {{ Form::text('height', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Ширина') }}
        {{ Form::text('width', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Обновить', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection
