@extends('layout.welcome')
@section('conteudo')

    <h1>CADASTRAR TESTE</h1>

    <form action="{{route('teste.store')}}" method="post">

        @csrf
    nome :<input type="text" name="nome"/>
        ponto:<input type="number" name="ponto"/>
          
        <button type="submit" name="cadastrar" class="btn btn-dark">teste</button>





    </form>
     


@endsection