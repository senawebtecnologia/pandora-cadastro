@extends('layouts.app')

@section('title', 'Criar um usuario')

@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h6 class="header-title">Criar Um Usuario</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.user.store') }}">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="userName">Nome</label>
                            <input type="text" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Data de Nascimento</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userAddress">Endereço</label>
                            <input type="text" class="form-control" id="userAddress">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userNumber">Telefone</label>
                            <input type="number" class="form-control" id="userNumber">
                        </div>
                        {{-- <div class="form-group col-md-6">
                            <label for="userComplent">Complemento</label>
                            <input type="text" class="form-control" id="userComplent">
                        </div> --}}
                        <div class="form-group col-md-6">
                            <label for="userCity">Cidade</label>
                            <input type="text" class="form-control" id="userCity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userCity">Estado</label>
                            <input type="text" class="form-control" id="userCity">
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
