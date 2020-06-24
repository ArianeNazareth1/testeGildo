@extends('layout.welcome')
@section('conteudo6')

    <h1>CADASTRAR QUESTION</h1>

    <form action="{{route('question.store')}}" method="post">

        @csrf
        <label>enunciado</label>
<textarea type="text" name="enunciado" cols="30" rows="10"></textarea><br>
      <label>Resposta</label>
    <select STYLE="margin-top:10px" name="resposta">
<option value="a">Resposta A</option>/* temos um valor */
    <option value="b">Resposta B</option>
    <option value="c">Resposta C</option>
    <option value="d">Resposta D</option>
    <option value="e">Resposta E</option>



</select><BR>
        <label>correta</label>
<input type="text" name="correta"/><br>
        ponto:<input type="number" name="valorquestao"/><br>
          
        <button type="submit" name="cadastrar" class="btn btn-dark">teste</button>





    </form>




 
@endsection