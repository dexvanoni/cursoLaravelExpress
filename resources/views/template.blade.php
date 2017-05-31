<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="/bst/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="col-md-12">
      <h1>
        @yield('content')
      </h1>
    </div>
  </div>
  <script src="/bst/js/jquery.min.js"></script>
  <script src="/bst/js/bootstrap.min.js"></script>
</body>
</html>
