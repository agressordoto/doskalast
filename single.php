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
<!--ШАПКА END------------------------------->

<!--Блок main START------------------------->
<div class="container"> <!--закрываем все в контейнер, чтоб была фиксированная ширина-->
    <div class="content row">
        <div class="main-content col-md-9 col-12">
            <h2>Вы открыли какую-то публикацию. Зачем вы это сделали? Я не знаю.</h2>
            <div class="single_post row"> <!--делаем строкой-->
                <div class="img col-12"> <!--Картинка статьи(про col посмотреть на boostrap - разрешение)-->
                    <img src="Внутренности/images/4.jpg" alt="" class="img-thumbnail"> <!--thubnail ободочек для картинки и 200x200-->
                </div>
                <div class="single_info_post">
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                </div>
                <div class="single_post_text col-12"> <!--Описание статьи-->
                  <p>Статья́ — это жанр журналистики, в котором автор ставит задачу проанализировать общественные ситуации, 
                    процессы, явления, прежде всего с точки зрения закономерностей, лежащих в их основе.</p>

                  <p>Такому жанру как статья присуща ширина практических обобщений, глубокий анализ фактов и явлений, 
                    четкая социальная направленность[источник не указан 4642 дня]. 
                    В статье автор рассматривает отдельные ситуации как часть более широкого явления. 
                    Автор аргументированно пишет о своей точке зрения.</p>
                    
                   <p>В статье выражается развернутая обстоятельная аргументированная концепция автора или 
                    редакции по поводу актуальной социологической проблемы. 
                    Также в статье журналист обязательно должен интерпретировать факты (это могут быть цифры, 
                    дополнительная информация, которая будет правильно расставлять акценты и ярко раскрывать суть вопроса).</p>
                    
                   <p>Отличительным аспектом статьи является её готовность. 
                    Если подготавливаемый материал так и не был опубликован (не вышел в тираж, 
                    не получил распространения), то такой труд относить к статье некорректно. 
                    Скорее всего данную работу можно назвать черновиком или заготовкой. 
                    Поэтому целью любой статьи является распространение содержащейся в ней информации.</p>
                    <p>Статья́ — это жанр журналистики, в котором автор ставит задачу проанализировать общественные ситуации, 
                    процессы, явления, прежде всего с точки зрения закономерностей, лежащих в их основе.</p>
    
                    <p>Такому жанру как статья присуща ширина практических обобщений, глубокий анализ фактов и явлений, 
                    четкая социальная направленность[источник не указан 4642 дня]. 
                    В статье автор рассматривает отдельные ситуации как часть более широкого явления. 
                    Автор аргументированно пишет о своей точке зрения.</p>
                        
                    <p>В статье выражается развернутая обстоятельная аргументированная концепция автора или 
                    редакции по поводу актуальной социологической проблемы. 
                    Также в статье журналист обязательно должен интерпретировать факты (это могут быть цифры, 
                    дополнительная информация, которая будет правильно расставлять акценты и ярко раскрывать суть вопроса).</p>
                     
                    <p>Отличительным аспектом статьи является её готовность. 
                    Если подготавливаемый материал так и не был опубликован (не вышел в тираж, 
                    не получил распространения), то такой труд относить к статье некорректно. 
                    Скорее всего данную работу можно назвать черновиком или заготовкой. 
                    Поэтому целью любой статьи является распространение содержащейся в ней информации.</p>
                    
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
                    <li><a href="#">Лучшие</a></li>
                    <li><a href="#">Патч</a></li>
                    <li><a href="#">КиберNews</a></li>
                    <li><a href="#">ИгроМета</a></li>
                    <li><a href="#">Н1</a></li>
                    <li><a href="#">Н2</a></li>
                    <li><a href="#">Н3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Блок main END--------------------------->
<!--footer START------------------------->
<? include("app/include/footer.php");?>
<!--footer END--------------------------->
    
</body>
</html>