@extends('layout.welcome')
@section('cont6')

    <h1>EDITAR  </h1>

    <form action="{{route('question.update',$question)}}" method="post">

        @csrf
        @method('PATCH')


        @csrf
   


  <label>enunciado</label>
<textarea type="text" name="enunciado" cols="30" rows="10" value="{{$question->enunciado}}"></textarea><br>
      <label>Resposta</label>
    <select STYLE="margin-top:10px" name="resposta" value="{{$question->resposta}}">
<option value="a">Resposta A</option>/* temos um valor */
    <option value="b">Resposta B</option>
    <option value="c">Resposta C</option>
    <option value="d">Resposta D</option>
    <option value="e">Resposta E</option>



</select><BR>
        <label>correta</label>
<input type="text" name="correta"value="{{$question->correta}}"/><br>
        ponto:<input type="number" name="valorquestao" value="{{$question->valorquestao}}"/><br>
          



        <button type="submit" name="cadastrar" class="btn btn-dark">EDITAR</button>


    </form>


@endsection