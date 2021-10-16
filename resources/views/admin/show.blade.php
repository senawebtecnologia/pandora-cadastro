@extends('layouts.app')

@section('title', 'Ver um usuario')

@section('content')

<div class="row">
    <div class="col-md-9 col-lg-9" style="margin: 0 auto">
        <div class="card">
          <div class="card-header text-right text-muted">
            Usuario
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="header text-center">
                    <h2>{{ $user->primeiro_nome .' '. $user->segundo_nome }}</h2>
                    <p class="small">{{ $user->data_nascimento }}</p>
                </div>

                <div class="content">
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li><b> Endereço: </b> {{ $user->endereco }}</li>
                      <li><b> Cidade: </b> {{ $user->cidade }}</li>
                      <li><b> Estado: </b> {{ $user->estado }}</li>
                      <li><b> Complemento: </b> {{ $user->complemento }}</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
