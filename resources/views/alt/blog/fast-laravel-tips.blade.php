@extends('layouts.base-alt')

@section('title','Fast Laravel Tips')

@section('content')
<article class="section article">
  <div class="kicker">Laravel</div>
  <h1>Fast Laravel Tips</h1>
  <div class="meta">Apr 18, 2025 • 4 min read</div>
  <p>Use route caching, config caching, and optimized autoload. In dev, lean on <code>tinker</code> and feature tests to iterate quickly.</p>
  <p>Profile the slow path first—most wins are in the database layer.</p>
</article>
@endsection
