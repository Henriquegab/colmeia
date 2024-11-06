@extends('adminlte::page')

@section('title', 'Listagem de Usuários')

@section('content_header')
    <h1>Listagem de Usuários</h1>
@stop

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Início</a></li>
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Usuários</a></li>
            <li class="breadcrumb-item">Listagem de Usuários</li>
        </ol>
    </nav>



    <div class="card card-dark card-outline">

        <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-striped dataTable dtr-inline">
                <thead>
                    <tr>
                        <th style="width: 50px;">ID</th>

                        <th>Nome</th>

                        <th>Email</th>

                        <th>Empresa</th>

                        <th>Criado em</th>

                        <th class="col-1">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->empresa->nome ?? '' }}</td>

                            <td>{{ $user->created_at->isoFormat('D [de] MMMM [de] YYYY, H\hmm') }}</td>

                            <td>

                                <div class="btn-group">
                                    @can('Editar user')
                                        <a class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"
                                            href="{{ route('user.show', $user) }}">
                                            <i class="fa fa-fw fa-pen"></i></a>
                                    @endcan

                                    @can('Deletar user')
                                        <form action="{{ route('user.destroy', $user) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Deletar" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- @if ($empresas->hasPages() != false)
            <div class="card-footer clearfix" style="padding-bottom: 0px;" ;>
                {{ $empresas->links() }}
            </div>
        @endif --}}

    @stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
