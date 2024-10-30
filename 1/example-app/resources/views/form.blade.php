<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">    
    <!DOCTYPE html><html prefix="og: https://ogp.me/ns#" itemscope="" itemtype="https://schema.org/WebPage" lang="ru" dir="ltr"><head>
    <!DOCTYPE html>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
 <body>
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="http://127.0.0.1:8000/about">Статьи</a>
      </div>
      <div class="col-4 text-center">
     <h3 class="pb-4 mb-4 fst-italic border-bottom">
        <a class="blog-header-logo text-dark" href="http://127.0.0.1:8000">Твой блог</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="/review">Отзывы</a>
      </div>
    </div>
  </header>
    </style>

  </head>
 <body>
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="http://127.0.0.1:8000/travel">Путешествия</a>
      <a class="p-2 link-secondary" href="http://127.0.0.1:8000/sport">Спорт</a>
      <a class="p-2 link-secondary" href="http://127.0.0.1:8000/hobby">Хобби</a>
      <a class="p-2 link-secondary" href="http://127.0.0.1:8000/study">Образование</a>
      <a class="p-2 link-secondary" href="http://127.0.0.1:8000/science">Наука</a>
    </nav>
  </div>
</div>

@yield('main_content')