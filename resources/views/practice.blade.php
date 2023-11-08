<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello this is a practice.
    The worker of CTS are
    @foreach($name as $nworker)
    <li>{{$nworker}}</li>
    @endforeach
    I am doing internship in the role of
    @foreach($role as $role)
      <li>{{$role}}</li>
    @endforeach
</body>
</html>