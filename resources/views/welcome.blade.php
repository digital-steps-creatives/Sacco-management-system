<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FIC Management System</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="welcome">
  <div id="app">
      <welcome-page></welcome-page>
  </div>
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>