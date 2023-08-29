<? 
include "path.php";
include SITE_ROOT . "/app/database/db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search-term'])){
    $posts = searchInTitleContent($_POST['search-term'], 'posts', 'users');
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--а это чтоб работала разметка страницы -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--скрипт позволяющий использовать иконки с сайта -->
    <script src="https://kit.fontawesome.com/d6360fa380.js" crossorigin="anonymous"></script>
    <!--ссылка на файл css -->
    <link rel="stylesheet" href="css/index.css">
    <!--ссылка на шрифты гугла(LOGO) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <!--ссылка на шрифты гугла(TEXT)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <title>Test work</title>
</head>
<body>
<!--ШАПКА START----------------------------->
<?php include("app/include/hadder.php"); ?> 

<!--Блок main START------------------------->
<div class="container"> <!--закрываем все в контейнер, чтоб была фиксированная ширина-->
    <div class="content row">
        <div class="main-content col-12">
            <h2>Результаты поиска</h2>
            <?php foreach ($posts as $post): ?>
                <div class="post row"> <!--делаем строкой-->
                    <div class="img col-12 col-md-4"> <!--Картинка статьи(про col посмотреть на boostrap - разрешение)-->
                        <img src=<?=base_url . 'images/posts/' . $post['img'] ?> alt="<?=$post['title']?>" class="img-thumbnail"> <!--thubnail ободочек для картинки и 200x200-->
                    </div>
                    <div class="post_text col-12 col-md-8"> <!--Описание статьи-->
                        <h3><a href="<?=base_url . 'single.php?post=' . $post['id']; ?>"><?=substr($post['title'], 0 , 120) . '...' ?></a></h3>
                        <i class="far fa-user"> <?=$post['username']; ?></i>
                        <i class="far fa-calendar"> <?=$post['created_date']; ?></i>
                        <p class="preview-text">
                        <?=mb_substr($post['content'], 0, 150, 'UTF-8') . '...' ?>
                    </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--Блок main END--------------------------->
<? include("app/include/footer.php");?>
</body>
</html>