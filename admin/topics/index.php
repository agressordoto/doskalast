<?php 
session_start();

include("../../path.php");
include("../../app/controllers/topics.php");
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
            <h2>Управление категориями</h2>
            <div class="row title-table">
                <div class="col-1">ID</div>
                <div class="col-5">Название</div>
                <div class="col-2">Управление</div>
                
            </div>
            <?php foreach($topics AS $key  => $topic):?>
            <div class="row post">
                <div class="id col-1"><?=$key + 1;?></div>
                <div class="title col-5"><?=$topic['name'];?></div>
                <div class="red col-2"><a href="edit.php?id=<?=$topic['id'];?>">edit</a></div>
                <div class="del col-2"><a href="edit.php?del_id=<?=$topic['id'];?>">delete</a></div>
            </div>
            <?php  endforeach;?>
        </div>
    </div>


</div>
        
<? include("../../app/include/footer.php");?>
</body>
</html>