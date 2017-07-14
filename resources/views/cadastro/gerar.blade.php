@extends ('template.template')
@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endsection
@section('main')
<div class="container">
<form class="form" action="{{route('gerador')}}" method="post">
  {!! csrf_field() !!}
  <label>Indicação de: </label>
  <select class="form-group" name="coach">
    <option value="1">Rafael</option>
    <option value="2">Guilherme</option>
    <option value="3">Marcos</option>
    <option value="4">Julliany</option>
    <option value="5">Wander</option>
  </select>
  <button type="submit" name="btn btn-warning">Gerar token</button>
</form>
@if(isset($token))
Token gerado:
<input type="text" class="form-control" name="token" value="{{$token->token}}">
@endif
<a href="{{url('/')}}">Voltar</a>
</div>
@endsection
