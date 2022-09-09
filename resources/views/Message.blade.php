@extends('layouts.app')

@section('content')

<form action="" method="POST" class="container">
{{ csrf_field() }}
<input type="text" name="number" class="form-control" placeholder="Numero">
<input type="text" name="name" class="form-control" placeholder="Nome">
<textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control" placeholder="Mensagem"></textarea>
<input type="submit" value="Salvar" class="btn btn-primary">
</form>

@endsection
