@extends('layouts.app')

@section('title', 'Listar um usuario')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Cidade</th>
                        <th>Operações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)    
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->primeiro_nome. ' '. $user->segundo_nome }}</td>
                            <td>{{ $user->telefone }}</td>
                            <td>{{ $user->cidade }}</td>
                            <td class="row justify-content-center"> 
                                <a href="{{ route('admin.user.show', ['user' => $user->id ]) }}" class="btn btn-primary mr-2"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('admin.user.edit', ['user' => $user->id ]) }}" class="btn btn-info mr-2"><i class="fa fa-edit"></i></a>
                                <form action="{{ route('admin.user.delete', ['user' => $user->id ]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Cidade</th>
                        <th>Operações</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
