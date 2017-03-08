<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    @if(count($errors) > 0)
<div>
@foreach($errors->all() as $error)
<h2>Invalid Credentials</h2>
@endforeach
</div>
@endif
    <form method="post">
      {{ csrf_field() }}
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password">
      <button type="submit">Login</button>
    </form>
  </body>
</html>
