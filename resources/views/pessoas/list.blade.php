@extends('layout')

@section('content')
	<div class="container">
	<div class="d-flex justify-content-between align-items-center">
		<h1>Pessoas</h1>
		<a class="btn btn-primary mb-2" type="button" href="{{ route('pessoas.create') }}">
	      <i class="fas fa-plus-square"></i> Adicionar
	    </a>
	</div>
	<table class="table table-responsive">
	    <thead>
	      <tr>
	        <th scope="col">Id</th>
	        <th scope="col">Nome</th>
	        <th scope="col">Email</th>
	        <th scope="col">Data de Nascimento</th>
	        <th scope="col">CPF</th>
	        <th scope="col">Nacionalidade</th>
	        <th scope="col" colspan="2">Opções</th>
	      </tr>
	    </thead>
	    <tbody>
	        @foreach($pessoas as $pessoa):
	        	<tr>
		            <td>{{$pessoa->id}}</td>
		            <td>{{$pessoa->nome}}</td>
		            <td>{{$pessoa->email}}</td>
		            <td>{{$pessoa->cpf}}</td>
		            <td>{{$pessoa->data_nasc}}</td>
		            <td>{{$pessoa->nacionalidade}}</td>
		            <td><a class="btn btn-success" type="button" href="{{ route('pessoas.edit', $pessoa) }}">Editar</a></td>
		            <td><button class="btn btn-danger" type="button" onclick="remove({{ $pessoa->id }}, '{{ $pessoa->nome }}')">Remover</button>
					<form action="{{ route('pessoas.destroy', $pessoa) }}" method="post" id="form-remove-{{ $pessoa->id}}">
						{{ csrf_field() }}
            			{{ method_field('DELETE') }}
		            </form>
		            </td>
	        	</tr>
	        @endforeach
	    </tbody>
	  </table>
	</div>
@endsection

<script type="text/javascript">
  function remove(id, nome) {
    var remove = confirm("Deseja realmente remover a pessoa "+nome+"?");
    if (remove == true) {
      $('#form-remove-'+id).submit();
    } 
  }
</script>