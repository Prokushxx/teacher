@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/app.css" rel="stylesheet">
  <title>Document</title>
  @livewireStyles()
</head> 
<body>
  @section('content')
  @livewire('add-student')
  @livewireScripts()
  @endsection
  
</body>
</html>