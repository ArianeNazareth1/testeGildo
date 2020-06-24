@extends('layout.welcome')
@section('conteudo6')



enunciado :<p>{{$question->enunciado}}</p>
resposta : <p>{{$question->resposta}}</p>

correta : <p>{{$question->correta}}</p>

correta : <p>{{$question->valorquestao}}</p>
<a href="{{route('question.index')}}" class="btn btn-info">Voltar</a> 
@endsection

<a href="{{route('question.index')}}" class="btn btn-info">Voltar</a> 