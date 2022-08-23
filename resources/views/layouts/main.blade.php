<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $tittle }}</title>
{{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('post') ? 'active' : '' }}" href="/post">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('category') ? 'active' : '' }}" href="/category">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link ms-auto" href="/login">
             <span data-feather="log-in"></span> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <div class="container mt-4">
@yield('container')
 </div>

 
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>