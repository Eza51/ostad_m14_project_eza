@extends('layouts.layout')

@section('title', 'Blog')

@section('content')
<main class="main">

  <!-- Blog Section -->
  <section id="blog" class="blog section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Blog</h2>
      <p>Some of my recent thoughts and writings</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">

        <!-- Blog Post 1 -->
        <div class="col-lg-6">
          <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body">
              <h5 class="card-title">Getting Started with Laravel</h5>
              <h6 class="card-subtitle mb-2 text-muted">Published on Aug 20, 2025 by Admin</h6>
              <p class="card-text">
                Laravel is a powerful PHP framework that makes web development easier and faster. 
                It provides elegant syntax, MVC architecture, and built-in features like authentication and routing.
              </p>
              <a href="#" class="btn btn-sm btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-lg-6">
          <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body">
              <h5 class="card-title">Why Blade Templating is Awesome</h5>
              <h6 class="card-subtitle mb-2 text-muted">Published on Aug 18, 2025 by Admin</h6>
              <p class="card-text">
                Blade is Laravel's templating engine. It lets you write clean templates with simple directives. 
                This makes your code more readable and maintainable.
              </p>
              <a href="#" class="btn btn-sm btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col-lg-6">
          <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body">
              <h5 class="card-title">Building a Portfolio Website</h5>
              <h6 class="card-subtitle mb-2 text-muted">Published on Aug 10, 2025 by Admin</h6>
              <p class="card-text">
                A portfolio website is a great way to showcase your skills and projects. 
                Using Laravel, you can create a simple, clean, and professional-looking website easily.
              </p>
              <a href="#" class="btn btn-sm btn-primary">Read More</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section><!-- /Blog Section -->

</main>
@endsection
