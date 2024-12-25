<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  @yield('title')
</head>
<body class = "dark:bg-gray-900">
    @include('components.navbar')
    <div class = "px-32 py-10">
        @yield('container')
    </div>
</body>
</html>
