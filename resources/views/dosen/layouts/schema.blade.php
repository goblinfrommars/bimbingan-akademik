<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} | Bimbingan Akademik</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div class="container-fluid p-0" style="height: 100vh;">
    @include('dosen.layouts.navbar')
    <main class="container-fluid p-0 h-100 d-flex justify-content-center align-items-start">
      <article class="h-100 border-end" style="width: 350px">
        @include('dosen.layouts.sidebar')
      </article>
      <article class="flex-grow-1 d-flex h-100 align-items-start overflow-auto juscify-content-center">
        @yield('dosen-mainbar')
      </article>
    </main>
  </div>

  <script src="{{ asset('src/js/goBack.js') }}"></script>
</body>

</html>
