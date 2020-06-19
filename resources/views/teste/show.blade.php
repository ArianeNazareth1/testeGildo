@extends('layout.welcome')
@section('conteudo')



nome :<p>{{$teste->nome}}</p>
ponto : <p>{{$teste->ponto}}</p>


<a href="{{route('teste.index')}}" class="btn btn-info">Voltar</a> 
@endsection

<a href="{{route('teste.index')}}" class="btn btn-info">Voltar</a> 