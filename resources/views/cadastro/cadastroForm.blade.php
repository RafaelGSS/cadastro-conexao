@extends ('template.template')

@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style media="screen">
body{
  width: 100%;
  margin: 0 auto;
  background: #22c1c3;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #fdbb2d, #22c1c3);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #fdbb2d, #22c1c3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.well {
  background-color: #2020e133;
}
</style>
@endsection
@section('main')
<div class="container">

    <form class="well form-horizontal" action="{{route('cadastrar')}}" method="post">
      {!! csrf_field() !!}
<fieldset>

<!-- Form Name -->
<legend>Mude sua vida!</legend>
<div class="form-group">
  <label class="col-md-4 control-label">Nome completo</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nome" class="form-control"  type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >CPF</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="cpf"  class="form-control"  type="number">
    </div>
  </div>
</div>
 <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email"  class="form-control"  type="email">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Telefone</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="telefone" class="form-control" type="number">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Data de nascimento</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="nascimento" lass="form-control" type="date">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Escolaridade</label>
    <div class="col-md-4 selectContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="escolaridade" class="form-control selectpicker" >
          <option value="" selected disabled>Selecione uma opção</option>
          <option value="Ensino Médio">Ensino médio</option>
          <option value="Técnico">Técnico</option>
          <option value="Superior cursando">Superior cursando</option>
          <option value="Superior completo">Superior completo</option>
          <option value="Superior incompleto">Superior incompleto</option>
          <option value="Pós graduação">Pós graduação</option>
        </select>
      </div>
    </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Instituição de ensino</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="instituicao"  class="form-control"  type="text">
    </div>
</div>
</div><div class="form-group">
  <label class="col-md-4 control-label">Curso</label>
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
        <input name="curso"  class="form-control" type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Ano de conclusão</label>
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="conclusao"  class="form-control" type="number">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Empresa</label>
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
        <input name="empresa"  class="form-control" type="text">
    </div>
  </div>
</div>
        <input name="coach_id" value="{{$coach->id}}" class="form-control" type="hidden">



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success form-control" >Cadastrar<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
@endsection
