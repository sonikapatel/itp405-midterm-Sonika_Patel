<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    @if (session('successStatus'))
  <div role="alert">
  {{session('successStatus') }}
  <!-- {{$user->name}} gets the user's name from the User class--> 
  </div>
  @endif
    <h1>Admin</h1>
    <p>...</p>
  </body>
</html>
