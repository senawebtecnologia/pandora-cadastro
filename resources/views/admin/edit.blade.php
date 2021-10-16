@extends('layouts.app')

@section('title', 'Editar um usuario')

@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h6 class="header-title">Editar Um Usuario</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.user.update', ['user' => $user->id ]) }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="userFirstName">Primeiro Nome</label>
                            <input type="text" class="form-control" id="userFirstName" name="primeiro_nome" value="{{ $user->primeiro_nome }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userSecondName">Segundo Nome</label>
                            <input type="text" class="form-control" id="userSecondName" name="segundo_nome" value="{{ $user->segundo_nome }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Data de Nascimento</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="data_nascimento" value="{{ $user->data_nascimento }}" data-target="#reservationdate"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userAddress">Endereço</label>
                            <input type="text" class="form-control" id="userAddress" name="endereco" value="{{ $user->endereco }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userNumber">Telefone</label>
                            <input type="number" class="form-control" id="userNumber" name="telefone" value="{{ $user->telefone }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userComplent">Complemento</label>
                            <input type="text" class="form-control" id="userComplent" name="complemento" value="{{ $user->complemento }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userCity">Cidade</label>
                            <input type="text" class="form-control" id="userCity" name="cidade" value="{{ $user->cidade }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userCity">Estado</label>
                            <input type="text" class="form-control" id="userCity" name="estado" value="{{ $user->estado }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
