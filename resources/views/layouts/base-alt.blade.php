<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Daffa Blog')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Merriweather:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/styles-alt.css') }}" />
</head>
<body>
  <a class="skip-link" href="#content">Skip to content</a>

  <header class="site-header" role="banner">
    <div class="container header-wrap">
      <a class="brand" href="{{ url('/alt') }}">Daffa Blog</a>
      <nav class="main-nav" aria-label="Main navigation">
        <a href="{{ url('/alt') }}">Home</a>
        <a href="{{ url('/alt/about') }}">About</a>
        <a href="{{ url('/alt/blog') }}">Blog</a>
        <a href="{{ url('/alt/contact') }}">Contact</a>
      </nav>
    </div>
  </header>

  <main id="content" class="container" role="main">
    @yield('content')
  </main>

  <footer class="site-footer" role="contentinfo">
    <div class="container footer-grid">
      <div>
        <div class="brand"Daffa Blog</div>
        <p class="muted">Fresh perspectives on productivity, design, and development.</p>
      </div>
      <nav class="footer-nav" aria-label="Footer">
        <a href="{{ url('/alt/about') }}">About</a>
        <a href="{{ url('/alt/blog') }}">Blog</a>
        <a href="{{ url('/alt/contact') }}">Contact</a>
      </nav>
      <div class="copy muted">© <span>{{ date('Y') }}</span> Daffa Blog. All rights reserved.</div>
    </div>
  </footer>
</body>
</html>
