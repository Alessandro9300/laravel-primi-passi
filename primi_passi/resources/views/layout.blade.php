<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
      @include('header')
    </header>
    <main>
      @yield('main_content')
    </main>
    <footer>
      @include('footer')
    </footer>
  </body>
</html>
