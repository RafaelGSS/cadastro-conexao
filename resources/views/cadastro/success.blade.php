@extends('template.template')
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
</style>
@endsection
@section('main')
  <div class="container">
    <h1 align="center"> Cadastro realizado com sucesso!</h1>
    <h2> Sabia decisão pequeno empreendedor!!! </h3>
    <h3> Foi enviado um e-mail para seu Coach : {{$coach->name}}, no qual ele entrará em contato com você </h3>

  </div>

@endsection
