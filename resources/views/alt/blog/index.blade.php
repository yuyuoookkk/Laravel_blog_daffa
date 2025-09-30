@extends('layouts.base-alt')

@section('title','Alt Blog — Blog')

@section('content')
<section class="section">
  <h1>Blog</h1>
  <p class="lede">Six fresh articles to get you started.</p>
</section>

<section class="section">
  <div class="grid">
    <article class="card">
      <div class="kicker">Productivity</div>
      <h3><a href="{{ url('/alt/blog/productivity-habits-2025') }}">Productivity Habits for 2025</a></h3>
      <p>Small routines that deliver outsized returns.</p>
      <div class="meta">Jan 10, 2025 • 6 min read</div>
    </article>
    <article class="card">
      <div class="kicker">Writing</div>
      <h3><a href="{{ url('/alt/blog/mastering-email-clarity') }}">Mastering Email Clarity</a></h3>
      <p>Write fewer words and get more replies.</p>
      <div class="meta">Feb 02, 2025 • 5 min read</div>
    </article>
    <article class="card">
      <div class="kicker">Design</div>
      <h3><a href="{{ url('/alt/blog/design-systems-starter') }}">Design Systems Starter</a></h3>
      <p>Foundations of an effective design system.</p>
      <div class="meta">Mar 14, 2025 • 7 min read</div>
    </article>
    <article class="card">
      <div class="kicker">Focus</div>
      <h3><a href="{{ url('/alt/blog/time-blocking-deep-work') }}">Time Blocking for Deep Work</a></h3>
      <p>Protect the hours that matter most.</p>
      <div class="meta">Apr 01, 2025 • 8 min read</div>
    </article>
    <article class="card">
      <div class="kicker">Laravel</div>
      <h3><a href="{{ url('/alt/blog/fast-laravel-tips') }}">Fast Laravel Tips</a></h3>
      <p>Quick performance and workflow boosters.</p>
      <div class="meta">Apr 18, 2025 • 4 min read</div>
    </article>
    <article class="card">
      <div class="kicker">Accessibility</div>
      <h3><a href="{{ url('/alt/blog/accessibility-checklist-quickstart') }}">Accessibility Checklist: Quickstart</a></h3>
      <p>Simple checks to reach more people.</p>
      <div class="meta">May 06, 2025 • 6 min read</div>
    </article>
  </div>
</section>
@endsection
