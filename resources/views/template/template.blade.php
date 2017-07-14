<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conexões de resultado</title>
    @yield('style')
  </head>
  <body>
    @if( isset($errors) && count($errors) > 0)
        <div class="alert">
            @foreach( $errors->all() as $error)
              <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    @yield('main')
  </body>
</html>
