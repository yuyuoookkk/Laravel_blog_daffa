@extends('layouts.base-alt')

@section('title','Daffa Blog — Home')

@section('content')
<section class="section">
  <h1 class="text-balance">Popular Articles</h1>
  <p class="lede">Fresh picks from our editors — the top three reads plus two supporting articles below.</p>
</section>

<section class="section">
  <h2>Top 3</h2>
  <div class="grid">
    <article class="card">
      <div class="kicker">Productivity</div>
      <h3><a href="{{ url('/alt/blog/productivity-habits-2025') }}">Productivity Habits for 2025</a></h3>
      <p>Build routines that actually stick with small, compound wins.</p>
      <div class="meta">Jan 10, 2025 • 6 min read</div>
    </article>
    <article class="card">
      <div class="kicker">Writing</div>
      <h3><a href="{{ url('/alt/blog/mastering-email-clarity') }}">Mastering Email Clarity</a></h3>
      <p>Cut fluff, get replies. The essentials of clear email.</p>
      <div class="meta">Feb 02, 2025 • 5 min read</div>
    </article>
    <article class="card">
      <div class="kicker">Design</div>
      <h3><a href="{{ url('/alt/blog/design-systems-starter') }}">Design Systems Starter</a></h3>
      <p>Start a system that scales without slowing you down.</p>
      <div class="meta">Mar 14, 2025 • 7 min read</div>
    </article>
  </div>
</section>

<section class="section">
  <h2>Supporting</h2>
  <div class="grid">
    <article class="card">
      <div class="kicker">Focus</div>
      <h3><a href="{{ url('/alt/blog/time-blocking-deep-work') }}">Time Blocking for Deep Work</a></h3>
      <p>Carve out concentration and protect your best hours.</p>
      <div class="meta">Apr 01, 2025 • 8 min read</div>
    </article>
    <article class="card">
      <div class="kicker">Laravel</div>
      <h3><a href="{{ url('/alt/blog/fast-laravel-tips') }}">Fast Laravel Tips</a></h3>
      <p>Quick wins to speed up your local dev and deployments.</p>
      <div class="meta">Apr 18, 2025 • 4 min read</div>
    </article>
  </div>
</section>
@endsection
