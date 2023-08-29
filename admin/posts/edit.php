<?php 

include "../../path.php";
include SITE_ROOT . "/app/controllers/posts.php";
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
            <div class="row title-table">
                <h2>Редактирование записи</h2>
            </div>
            <div class="row add-post">
                <!-- Вывод массива с ошибками -->
                <div class="mb-12 col-12 col-md-12 err">
                    <?php include("../../app/helps/errorinfo.php"); ?> 
                </div>
                <form action="edit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$id; ?>">
                    <div class="col">
                        <input value="<?=$post['title']; ?>" name="title" type="text" class="form-control" placeholder="title" aria-label="Название статьи">
                     </div>
                        <div class="col">
                        <label for="content" class="form-label">Содержимое записи</label>
                        <textarea name="content" class="form-control" id="content" rows="6"><?=$post['content']; ?></textarea>
                     </div>
                     <div class="input-group col">
                        <input name="img" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <select name="topic" class="form-select" aria-label="Default select example">

                        <?php foreach($topics AS $key  => $topic):?>
                            <option value="<?=$topic['id'];?>"><?=$topic['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-check">
                    <?php if (empty($publish) && $publish == 0): ?>
                        <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Publish</label>
                    <?php else: ?>
                        <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">Publish</label>
                    <?php endif; ?>
                    </div>
                    <div class="col col-6">
                        <button name="edit_post" class="btn btn-primary" type="submit">Сохранить запись</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
        
<? include("../../app/include/footer.php");?>
</body>
</html>