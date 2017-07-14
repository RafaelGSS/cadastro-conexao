@extends ('template.template')
@section('style')
  <link rel="stylesheet" type="text/css" href="css/login.css">
@endsection
@section('main')
<div class="container">
  <div class="content">
    <h1> Your journey starts here </h1>
    <form method="post" action="{{url('/cadastro')}}">
      {!! csrf_field() !!}
      <div class="form-input">
        <input type="text" name="token" placeholder="Key" />
     </div>
      <div class="button">
        <button type="submit" class="btn">Validar</button>
      </div>
    </form>
  </div>
</div>
@endsection
