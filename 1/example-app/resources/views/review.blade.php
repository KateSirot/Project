@extends('form')

@section('title')Твой блог.Отзывы@endsection

@section('main_content')


  <main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
   
      <h1 class="display-4 fst-italic">Здесь вы можете оставить свой отзыв</h1><br>

      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif


 <form method="post" action="/review/check">
    @csrf
    <input type="name" name="name" id="name" placeholder="Введите ваше имя" class="form-contol"><br>
    <input type="email" name="email" id="email" placeholder="Введите ваш email" class="form-contol"><br>
    <input type="rating" name="rating" id="rating" placeholder="Оставьте оценку 1-5" class="form-contol"><br>
    <textarea name="message" id="message"  class="form-contol"placeholder="Введите отзыв"></textarea><br>
    <button type="submit" class="button">Отправить</button>
</form>
     <div class="p-10 p-md-5 mb-4 text-white bg-dark">
</div>
     </div>
     <article class="blog-post">
        <h2 class="blog-post-title">Пример комментария о блоге</h2>
        <p class="blog-post-meta">1 января 2023 года <a href="#">Алекс</a></p>

        <p><p>Отличная статья! Очень понравилось, как вы&nbsp;структурировали материал и&nbsp;представили информацию. Особенно ценно, что вы&nbsp;рассмотрели проблему с&nbsp;разных сторон и&nbsp;предложили практические рекомендации. Спасибо за&nbsp;полезную и&nbsp;интересную публикацию!</p></p>
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

@endsection