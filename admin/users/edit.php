<?php 
session_start();
include "../../path.php";
include "../../app/controllers/users.php"
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
    <link rel="stylesheet" href="../../css/admin.css">
    <!--ссылка на шрифты гугла(LOGO) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
   
    <title>Test work</title>
</head>
<body>
<!--ШАПКА START----------------------------->
<?php include("../../app/include/header-admin.php"); ?> 
<!--ШАПКА END------------------------------->

<!--Блок карусели END------------------------->
<div class="container">
<?php include("../../app/include/sidebar-admin.php"); ?>
    
        
        <div class="posts col-9">
            <div class="button-row">
                <a href="<?php echo base_url . "admin/users/create.php";?>" class="col-2 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo base_url . "admin/users/index.php";?>" class="col-2 btn btn-warning">Редактировать</a>
            </div>
            <div class="row title-table">
                <h2>Создать пользователя</h2>
                <form class="edit.php" method="POST">
                <input name="id" value="<?=$id?>" type="hidden">
            </div>
            <div class="col">
            <label for="formGroupExampleInput" class="form-label"><div class="mb-3 col-12 col-md-4 err" style="display: inline;"><p><?=$errMsg?></p></div> Логин</label>
            <input name="login" value="<?=$username?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Логин">
        </div>
        
      
        <div class="col">
            <label for="exampleInputEmail1" class="form-label"><p><?=$errMsg?></p>Email адрес</label>
            <input name="email" value="<?=$email?>" type="email" class="form-control" readonly id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
          
        </div>
        
        <div class="col">
            <label for="exampleInputPassword1" class="form-label">Сбросить пароль</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            
        </div>

        <div class="col">
            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторение пароля">
        </div>
  
        <div class="col">
            <label for="exampleInputTel" class="form-label">Номер</label>
            <input name="telephone" value="<?=$ltelephone?>" type="tel" class="form-control" id="exampleInputTel" placeholder="Номер">
        </div>
        <input name="admin" class="form-check-input" value="1" type="checkbox" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Admin?</label>
                    <div class="col">
                        <button name="update-user" class="btn btn-primary" type="submit">Обновить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
        
<? include("../../app/include/footer.php");?>
</body>
</html>