<!DOCTYPE html>
<body>

@extends('form')

@section('title')Твой блог.Статьи@endsection

@section('main_content') 
<?php include_once base_path('resources\views\genexc.php')?>
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

<div class="row mb-2">
  <?$articles =[["title1"=>"Хобби","title"=>"Интересная статья про хобби","date"=>"11.02.2024"],["title1"=>"Образование","title"=>"Интересная статья про образование","date"=>"21.03.2024"]];?>
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


<div class="row mb-2">
<?$articles =[["title1"=>"Наука","title"=>"Интересная статья про науку","date"=>"11.02.2024"]];?>
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

</body>
@endsection
</html>
