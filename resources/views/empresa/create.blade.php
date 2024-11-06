@extends('adminlte::page')

@section('title', 'Cadastrar empresa')

@section('content_header')
    <h1>Cadastro de empresas</h1>
@stop

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Início</a></li>
            <li class="breadcrumb-item"><a href="{{ route('empresa.index') }}">Empresas</a></li>
            <li class="breadcrumb-item">Cadastro de empresa</li>
        </ol>
    </nav>



    <div class="card card-dark card-outline">

        <div class="card-body table-responsive p-4">
            <form method="post" action="{{ route('empresa.store') }}">
                @csrf
                   {{-- Minimal --}}
               <div class="row">
                   <x-adminlte-input enable-old-support name="nome" type="name" placeholder="Empresa" fgroup-class="col-md-7" label="Nome da empresa"/>

                   {{-- Email type --}}



                       <x-adminlte-input enable-old-support name="cnpj" type="string" label="CNPJ" placeholder="25.246.765/0001-37"
                           fgroup-class="col-md-5"/>
               </div>



                   <x-adminlte-button class="btn-flat rounded-lg" type="submit" label="Cadastrar" theme="success" icon="fas fa-lg fa-save"/>
           </form>
        </div>
    </div>


    @stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
