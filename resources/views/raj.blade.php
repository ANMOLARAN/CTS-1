<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('header')
@php
    $message = "Hello, <strong>John</strong>.";
    @endphp

    <p>{!! $message !!}</p>

    <strong>{!! '<h6>This is the template raj working</h6> ' !!}</strong>
    
    <h1>{{$message}}</h1>
    @{{$message}}
    <h1>{{ $share }}</h1>
    @isset($share)
    <h1>yes it is set</h1>
    @endisset
   @include('footer')
    
</body>
</html>