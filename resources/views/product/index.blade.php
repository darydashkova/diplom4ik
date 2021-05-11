@extends('layouts.app')

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

@section('content')
    <h1>{{ $title  }}</h1>

    <ul>
        @foreach($products as $value)
            <li>
                {{ $value->model }}
                {{ Form::open(array('url' => 'product/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Удалить', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
            </li>
        @endforeach
    </ul>

@endsection
