<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@section('title') @show</title>
    
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">

    @stack('css')

  </head>
  <body>
    
    <!-- Conteúdo -->
	@yield('conteudo')

  </body>
</html>