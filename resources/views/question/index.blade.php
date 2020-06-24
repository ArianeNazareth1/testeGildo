@extends('layout.welcome')
@section('conteudo6')


    <h1>questions</h1>



    @foreach($question as $question)
        <h3>question</h3>
        enunciado:<P>{{$question->enunciado}}</P>
        resposta :<P>{{$question->resposta}}</P>
    correta :<P>{{$question->correta}}</P>
        valorquestao :<P>{{$question->valorquestao}}</P>
    <p>

        <a href="{{route('question.show',$question)}}" class="btn btn-success">MOSTRAR </a>
        <a href="{{route('question.edit',$question)}}" class="btn btn-success">EDITAR</a>

        </p>
        <form action="{{route('question.destroy',$question->id)}}" method="post">

        @csrf
            @method('DELETE')

            <button type="submit" name="cadastrar" class="btn btn-dark">DELETAR</button>




         </form>

        <p> Registro Foi Cadastrado com sucesso</p>

    @endforeach




@endsection