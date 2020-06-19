@extends('layout.welcome')
@section('cont')

    <h1>EDITAR  </h1>

    <form action="{{route('teste.update',$teste)}}" method="post">

        @csrf
        @method('PATCH')


        @csrf
        nome :<input type="text" name="nome" value="{{$teste->nome}}" />
        ponto:<input type="number" name="ponto" value="{{$teste->ponto}}"/>
         
        <button type="submit" name="cadastrar" class="btn btn-dark">EDITAR</button>








    </form>


@endsection