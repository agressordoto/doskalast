<? 
include "path.php";
include "app/controllers/topics.php";
?>

<!DOCTYPE html>
<html lang="en">
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
        <div class="main-content col-md-9 col-12">
            <h3>О нас</h3>
        <p>Ресурс Doska – доска объявлений, информационный портал для вашего удобства.
Наша миссия: предоставлять лучший сервис в поиске автомобилей, мотоциклов и бытовой техники.</p>
<p>Мы делаем всё, чтобы наш портал запомнился каждому посетителю, как самый удобный, быстрый и эффективный ресурс для поиска нужного вам товара.
Здесь максимально практичный интерфейс — пользователь с лёгкостью найдёт желаемый раздел и поделится своим объявлением.</p>
<p>Для вашего удобства:
* База самых актуальных объявлений от физических и юридических лиц.
* Только проверенные объявления.
* Ежедневные обновления.</p>
<p>Создатели:
    Помолошнова Ю.,
    Роор В.,
    Федорук А.
</p>
            
        </div>
        
</div>
<!--Блок main END--------------------------->
<? include("app/include/footer.php");?>
</body>
</html>