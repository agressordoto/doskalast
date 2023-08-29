<? 
include("path.php");
include("app/database/db.php");
include("app/controllers/users.php");
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
<body"> 
<!--ШАПКА START----------------------------->
<?php include("app/include/hadder.php"); ?> 
<!--ШАПКА END------------------------------->
<!--FORMA registr---------------------------------->
<div class="container regist_form"> <!--Оборачиваем в глобальный класс-->
    <form class="row justify-content-center" method="post" action="reg.php"> <!--Шоб было понятно, шо строка-->
        <h2 class="col-12">Регистрация</h2>
        
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label"><div class="mb-3 col-12 col-md-4 err" style="display: inline;"><p><?=$errMsg?></p></div> Логин</label>
            <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Логин">
        </div>
        
        <div class="w-100"></div> <!--Принудительно  переходим на каждую строк(шоб было по центру)-->
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email адрес</label>
            <input name="email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="..." aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Вводите только действительный Email адрес!</div>
        </div>
        <div class="w-100"></div> <!--Принудительно  переходим на каждую строк(шоб было по центру)-->
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="...">
            <div id="passwordHelp" class="form-text">Придумайте уникальный пароль!</div>
        </div>
        <div class="w-100"></div> <!--Принудительно  переходим на каждую строк(шоб было по центру)-->
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="...">
        </div>
        <div class="w-100"></div> <!--Принудительно  переходим на каждую строк(шоб было по центру)-->
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputTel" class="form-label">Номер</label>
            <input name="telephone" value="<?=$ltelephone?>" type="tel" class="form-control" id="exampleInputTel" placeholder="...">
        </div>
        <div class="w-100"></div> <!--Принудительно  переходим на каждую строк(шоб было по центру)-->
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-dark" name="button-reg">Подтвердить</button>
            <a href="authorisation.html">У меня есть аккаунт</a>
        </div>
        
    </form>
</div>
<!--END FORMA registr------------------------------>
<!--footer START------------------------->
<? include("app/include/footer.php");?>
<!--footer END--------------------------->