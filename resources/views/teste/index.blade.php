@extends('layout.welcome')
@section('conteudo')


    <h1>teste</h1>



    @foreach($testes as $teste)
        <h3>teste</h3>
        nome:<P>{{$teste->nome}}</P>
        ponto :<P>{{$teste->ponto}}</P>

    <p>

        <a href="{{route('teste.show',$teste)}}" class="btn btn-success">MOSTRAR </a>
        <a href="{{route('teste.edit',$teste)}}" class="btn btn-success">EDITAR</a>

        </p>
        <form action="{{route('teste.destroy',$teste->id)}}" method="post">

        @csrf
            @method('DELETE')

            <button type="submit" name="cadastrar" class="btn btn-dark">DELETAR</button>




         </form>

        <p> Registro Foi Cadastrado com sucesso</p>

    @endforeach




@endsection