@extends('layouts.app')

@section('title', 'Criar um usuario')

@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h6 class="header-title">Criar Um Usuario</h6>
            </div>
            <div class="card-body">
                
                @if ($errors->all())    
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="userFirstName">Primeiro Nome</label>
                            <input type="text" class="form-control" id="userFirstName" name="primeiro_nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userSecondName">Segundo Nome</label>
                            <input type="text" class="form-control" id="userSecondName" name="segundo_nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userAddress">Endereço</label>
                            <input type="text" class="form-control" id="userAddress" name="endereco">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userNumber">Telefone</label>
                            <input type="number" class="form-control" id="userNumber" name="telefone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userComplent">Complemento</label>
                            <input type="text" class="form-control" id="userComplent" name="complemento">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userCity">Cidade</label>
                            <input type="text" class="form-control" id="userCity" name="cidade">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userCity">Estado</label>
                            <input type="text" class="form-control" id="userCity" name="estado">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userPassword">Senha</label>
                            <input type="password" class="form-control" id="userPassword" name="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userConfirmPassword">Confirmar Senha</label>
                            <input type="password" class="form-control" id="userConfirmPassword" name="password_confirmation">
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
