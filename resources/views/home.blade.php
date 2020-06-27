@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

            <div class="content">
                <div class="title m-b-md">
                    Teste Ari
                </div> 

                <div class="links">
                   <div class="nav navbar">
                 <ul class="nav navbar mr-auto">

                     <li>
                        <a href="{{route('teste.create')}}" class="btn btn-info">CADASTRAR TESTE</a>
                     </li>
                     <li>
                        <a href="{{route('question.create')}}" class="btn btn-info">CADASTRAR QUESTÃO</a>
                     </li>
                    <li>
                        <a class="btn btn-info">TESTE</a>
                     </li>
                 </ul>
                </div>
                <div class="container">

                    @yield('conteudo')
                </div>




                <div class="container">

                    @yield('cont')
                </div>

                   <div class="container">

                    @yield('conteudo6')
                </div>




                <div class="container">

                    @yield('cont6')
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
