<?
function genexc($cnt){
    $articles=['travel','sport','hobby','study','science'];
    $excerpts = [];
    foreach($articles as $article) {
    $file = base_path('resources\views\\'.$article.'.blade.php');

    // Открываем файл как dom
    $htmlC=file_get_contents($file);
    $doc = new DOMDocument('1.0','UTF-8');
    libxml_use_internal_errors(true);
    $doc->loadHTML(mb_convert_encoding($htmlC,'HTML-ENTITIES', 'UTF-8'));
    libxml_clear_errors();

    $el = $doc->getElementById("fp");

    $content = $el->textContent;
    // Ограничение текста до 250 символов
    $excerpt = mb_substr($content, 0, 250);
    // Проверка на наличие незакрытых слов и добавление многоточия
    if (mb_strlen($content) > 250) {
        $excerpt = rtrim(mb_substr($content, 0, mb_strrpos($excerpt, ' '))) . '...';
    }

    // Добавление ссылки в последние три слова
    $words = explode(' ', $excerpt);

    $lastThreeWords = array_slice($words, -3, 3);
    // Формируем ссылку из последних трёх слов
    $link = '<a href="http://127.0.0.1:8000/'.$article.'">' . implode(' ', $lastThreeWords) . '</a>';
    // Убираем последние три слова из excerpt и добавляем ссылку
    $excerpt = implode(' ', array_slice($words, 0, -3)) . ' ' . $link;

    $excerpts[]=$excerpt;

    }
    return $excerpts[$cnt];
}