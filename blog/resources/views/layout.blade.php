<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Alex Gimsons Blog </title>

  <!-- Bootstrap core CSS -->
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
    crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="/css/blog.css" rel="stylesheet">
  
</head>

<body>

  @include('layouts.nav')

  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title">Alex Gimsons Blog</h1>
      <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
  </div>

  <div class="container">

    <div class="row">

      @yield('content') 
      
      @include('layouts.sidebar')

    </div>

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary" href="#">Newer</a>
    </nav>

  </div>

  @include('layouts.footer')

</body>

</html>