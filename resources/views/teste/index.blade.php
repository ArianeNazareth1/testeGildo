@extends('layout.welcome')
@section('conteudo')


    <h1>teste</h1>



    @forelse($testes as $teste)
        <h3>teste</h3>
        nome:<P>{{$teste->nome}}</P>
        ponto :<P>{{$teste->ponto}}</P>

    <p>

        <a href="{{route('teste.show',$teste)}}" class="btn btn-success">MOSTRAR </a>
        <a href="{{route('teste.edit',$teste)}}" class="btn btn-success">Editar</a>

        </p>
        <form action="{{route('teste.destroy',$teste->id)}}" method="post">

        @csrf
            @method('DELETE')

            <button type="submit" name="cadastrar" class="btn btn-dark">DELETAR</button>




         </form>



    @empty

        <p> nao cadastrou</p>

    @endforelse




@endsection