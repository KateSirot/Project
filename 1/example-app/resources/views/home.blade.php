@extends('form')

@section('title')Твой блог.Главная страница@endsection

@section('main_content') 

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Здесь вы можете найти для себя интересные статьи и оставить отзыв о них</h1>
    </div>
  </div>

  <?php include_once base_path('resources\views\genexc.blade.php')?>
<div class="row mb-2">
  <?$articles =[["title1"=>"Путешествия","title"=>"Интересная статья про путешествия","date"=>"11.02.2024"],["title1"=>"Спорт","title"=>"Интересная статья про спорт","date"=>"21.03.2024"]];?>
  <?$cnt=0?>
  <?foreach ($articles as $article):?>
    <?$title1 = $article["title1"];
    $title = $article["title"];
    $date = $article["date"];
    $excerpt = genexc($cnt);
    $cnt+=1;
    ?>
    <?include base_path('resources\views\article.blade.php');?>
  <?endforeach;?>
</div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Отзывы
      </h3>
      

      <article class="blog-post">
        <h2 class="blog-post-title">Пример комментария в блоге</h2>
        <p class="blog-post-meta">1 января 2024 года <a href="http://127.0.0.1:8000/review">Алекс</a></p>
        
        <p>Отличная статья! Очень понравилось, как вы&nbsp;структурировали материал и&nbsp;представили информацию. Особенно ценно, что вы&nbsp;рассмотрели проблему с&nbsp;разных сторон и&nbsp;предложили практические рекомендации. Спасибо за&nbsp;полезную и&nbsp;интересную публикацию!</p>
        <hr>

      <article class="blog-post">
        <h2 class="blog-post-title">Другой пример комметария в блоге</h2>
        <p class="blog-post-meta">23 декабря 2023 г. <a href="http://127.0.0.1:8000/review">Тим</a></p>

        <p>Спасибо за&nbsp;такую информативную и&nbsp;глубокую статью! Я&nbsp;нашел ее&nbsp;очень полезной и&nbsp;хотел&nbsp;бы поделиться своими мыслями по&nbsp;поводу затронутых вопросов.</p>
        <p><nobr>Во-первых</nobr>, мне понравилась ваша структура изложения материала. Вы&nbsp;последовательно раскрываете каждую тему, приводите аргументы и&nbsp;подкрепляете их&nbsp;примерами. Это делает чтение статьи легким и&nbsp;понятным даже для тех, кто не&nbsp;слишком глубоко знаком с&nbsp;темой.</p>
        <p><nobr>Во-вторых</nobr>, ваши рекомендации по&nbsp;применению предложенных идей на&nbsp;практике заслуживают особого внимания. Часто бывает сложно применить теорию в&nbsp;реальной жизни, но&nbsp;вы&nbsp;дали конкретные шаги, которые можно сразу&nbsp;же начать реализовывать. Это особенно ценно, потому что многие статьи заканчиваются на&nbsp;этапе &laquo;что нужно делать&raquo;, но&nbsp;не&nbsp;говорят, как именно это сделать.</p>
        <p>Что касается критики, я&nbsp;согласен с&nbsp;вами в&nbsp;большинстве моментов, но&nbsp;есть одна деталь, которую хотелось&nbsp;бы обсудить. На&nbsp;мой взгляд, ваш подход к&nbsp;вопросу X&nbsp;мог&nbsp;бы быть немного скорректирован. Возможно, стоило учесть <nobr>Y-фактор</nobr>, который тоже играет значительную роль в&nbsp;этом вопросе. Конечно, это мое субъективное мнение, и&nbsp;возможно, у&nbsp;вас были свои причины не&nbsp;включать этот аспект в&nbsp;обсуждение.</p>
        <p>В&nbsp;целом, статья получилась отличной! Благодарю за&nbsp;ваше старание и&nbsp;желание делиться знаниями с&nbsp;читателями. Жду с&nbsp;нетерпением ваших следующих публикаций!</p>
      </article>

      <article class="blog-post">
        <h2 class="blog-post-title">Третий пример комметария в блоге</h2>
        <p class="blog-post-meta">14 декабря 2023 г. <a href="http://127.0.0.1:8000/review">Крис</a></p>

        Интересная статья! Автор хорошо раскрыл тему и привел убедительные аргументы. Было приятно читать, спасибо за полезную информацию!</p>
      </article>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Назад</a>
        <a class="btn btn-outline-secondary disabled">Далее</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">О нас</h4>
          <p class="mb-0"><p>Добро пожаловать на&nbsp;наш сайт, где вы&nbsp;найдете коллекцию интересных и&nbsp;полезных статей на&nbsp;самые разные темы! Здесь каждый сможет найти <nobr>что-то</nobr> для себя: от&nbsp;советов по&nbsp;саморазвитию и&nbsp;здоровому образу жизни до&nbsp;последних новостей и&nbsp;аналитических обзоров. Наши авторы стараются предоставить вам актуальную и&nbsp;достоверную информацию, чтобы помочь вам расширить кругозор и&nbsp;узнать <nobr>что-то</nobr> новое. Присоединяйтесь к&nbsp;нашему сообществу и&nbsp;оставайтесь в&nbsp;курсе всего важного и&nbsp;интересного! :)</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Другие ссылки</h4>
          <ol class="list-unstyled">
            <li><a href="https://github.com/KateSirot/Project">GitHub</a></li>
            <li><a href="https://vk.com/vnikatya">VK</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
  <p>
    <a href="#">Вернуться наверх</a>
  </p>
</footer> 
  </body>
  
</html>
@endsection