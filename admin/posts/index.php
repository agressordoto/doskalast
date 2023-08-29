<? 
include("path.php");
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
    <link rel="stylesheet" href="css/admin.css">
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
<!--ШАПКА END------------------------------->
<!--Блок карусели START----------------------->
<div class="container"> <!--Ограничиваем "в обертку" нашу карусель-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/avto.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5><a href="..."></a></h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/avto.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5><a href="..."></a></h5>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div><!--конец "обертки" карусели-->
<!--Блок карусели END------------------------->
<!--Блок main START------------------------->
<div class="container"> <!--закрываем все в контейнер, чтоб была фиксированная ширина-->
    <div class="content row">
        <div class="main-content col-md-9 col-12">
            <h2>Последние публикации</h2>
            <div class="post row"> <!--делаем строкой-->
                <div class="img col-12 col-md-4"> <!--Картинка статьи(про col посмотреть на boostrap - разрешение)-->
                    <img src="images/logo.png" alt="" class="img-thumbnail"> <!--thubnail ободочек для картинки и 200x200-->
                </div>
                <div class="post_text col-12 col-md-8"> <!--Описание статьи-->
                    <h3><a href="#">Приколдес статья ага да</a></h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">Какой-то текст...</p>
                </div>
            </div>
            <div class="post row"> <!--делаем строкой-->
                <div class="img col-12 col-md-4"> <!--Картинка статьи(про col посмотреть на boostrap - разрешение)-->
                    <img src="images/logo.png" alt="" class="img-thumbnail"> <!--thubnail ободочек для картинки и 200x200-->
                </div>
                <div class="post_text col-12 col-md-8"> <!--Описание статьи-->
                    <h3><a href="#">Приколдес статья ага да</a></h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">Какой-то текст...</p>
                </div>
            </div>
            
        </div>
        <!--sidebar-->
        <div class="sidebar col-md-3 col-12">
            <div class="section search"> <!--наше поле поиска-->
                <h3>Поиск по публикациям</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите запрос...">
                </form>
            </div>

            <div class="section topics"> <!--критерии поиска-->
                <h3>Категории</h3>
                <ul>
                        <ul>
                            <li><a href="#">Автомобили</a>
                                <ul>
                                    <li><a href="#">Nissan</a></li>
                                    <li><a href="#">BMW</a></li>
                                    <li><a href="#">Audi</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Мотоциклы и мототехника </a>
                            <ul>
                                <li><a href="#">Cruiser</a></li>
                                <li><a href="#">Chopper</a></li>
                                <li><a href="#">Power Cruiser</a></li>
                            </ul>
                            </li>
                            <li><a href="#" class="brd">Комбайны, мультиварки, скороварки</a>
                            <ul>
                                <li><a href="#">Vitec</a></li>
                                <li><a href="#">Uras</a></li>
                                <li><a href="#">LG</a></li>
                            </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Блок main END--------------------------->
<? include("app/include/footer.php");?>
</body>
</html>