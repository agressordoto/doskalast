<?php 
session_start();
include "../../path.php";
include SITE_ROOT."/app/controllers/topics.php";

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
                <a href="<?php echo base_url . "admin/topics/create.php";?>" class="col-2 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo base_url . "admin/topics/index.php";?>" class="col-2 btn btn-warning">Редактировать</a>
            </div>
            <div class="row title-table">
                <h2>Обновление категорию</h2>
            </div>
            <div class="row add-post">
                <form action="edit.php" method="POST">
                    <div class="mb-12 col-12 col-md-12 err"><p><?=$errMsg?></p></div>
                    <input name="id" value="<?=$id;?>" type="hidden" >
                    <div class="col">
                        <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Имя категории" aria-label="Имя категории">
                     </div>
                        <div class="col">
                        <label for="content" class="form-label">Описание категории</label>
                        <textarea name="description"  class="form-control" id="content" rows="3"><?=$description;?></textarea>
                     </div>
                   
                    <div class="col">
                        <button name="topic-edit" class="btn btn-primary" type="submit">Обновить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
        
<? include("../../app/include/footer.php");?>
</body>
</html>