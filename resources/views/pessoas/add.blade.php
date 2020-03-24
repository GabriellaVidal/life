@extends('layout')

@section('content')
	<div class="container">
	  <div class="card">
	  	<div class="card-body">
          <h1>Adicionar Pessoa</h1>
          <form action="{{ route('pessoas.store')}}" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="form-group col-12">
                <label for="nome">Nome</label>
                <input class="form-control {{ $errors->has('nome') ? ' error' : '' }}" name="nome" value="{{ old('nome')}}">
                @if ($errors->has('nome'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nome') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3">
                <label>Email</label>
                <input class="form-control {{ $errors->has('email') ? ' error' : '' }}" name="email" value="{{ old('email')}}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group col-3">
                <label>CPF</label>
                <input class="cpf form-control {{ $errors->has('cpf') ? ' error' : '' }}" name="cpf" value="{{ old('cpf')}}">
                @if ($errors->has('cpf'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group col-3">
                <label>Data de Nascimento</label>
                <input type="text" 
                    class="datepicker form-control {{ $errors->has('data_nasc') ? ' error' : '' }}" 
                    name="data_nasc" 
                    value="{{ old('data_nasc')}}">
                @if ($errors->has('data_nasc'))
                    <span class="help-block">
                        <strong>{{ $errors->first('data_nasc') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group col-3">
                <label>Nacionalidade</label>
                <input class="form-control {{ $errors->has('nacionalidade') ? ' error' : '' }}" name="nacionalidade" value="{{ old('nacionalidade')}}">
                @if ($errors->has('nacionalidade'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nacionalidade') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a type="button" class="btn btn-danger" href="{{route('pessoas.index')}}">Voltar</a>
              </div>
            </div>
          </form>
	      </div>
	  </div>
	</div>
@endsection