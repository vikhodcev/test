@extends('index')

@section('content')

<h1 class="text-center">{{ isset($pagetitle) ? $pagetitle : 'Гостевая книга' }}</h1>
    <hr/>
<div class="text-right"><b>Всего сообщений:</b> <i class="badge">{{ $count }}</i></div>
        <br/>        

        @include('post._messages')
        @include('post._form')
    
@stop 