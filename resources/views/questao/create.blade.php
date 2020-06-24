@extends('layout.welcome')
@section('conteudo5')

    <h1>CADASTRAR QUESTÃO</h1>

    <form action="{{route('questao.store')}}" method="post">

        @csrf
  
       <label>Enunciado</label>
<textarea type="text" name="enunciado"  ></textarea><br>
<label>Resposta A</label>
<input type="text" name="respostaA"  ><br>

<label>Resposta B</label>
<input type="text" name="respostaB"  ><br>

<label>Resposta C</label>
<input type="text" name="respostaC" ><br>
<label>Resposta D</label>

<input type="text" name="respostaD" ><br>

<label>Resposta E</label>
<input type="text" name="respostaE"><br>
<label>Correta</label>
<select STYLE="margin-top:10px" name="correta" > 
    <option  value="a">Resposta A</option>
    <option  value="b">Resposta B</option>
    <option  value="c">Resposta C</option>
    <option  value="d">Resposta D</option>
    <option value="d">Resposta E</option>
    
</select><br>

       <label>Valor da questão</label>
<input type="number" name="valorquestao"><br>
        <button type="submit" name="cadastrar" class="btn btn-dark">Cadastrar Questão</button>





    </form>


@endsection