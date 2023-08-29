<?php
include SITE_ROOT . "/app/database/db.php";
$errMsg = '';
$topics = selectAll('topics');
$id = '';
$name = '';
$description = '';
//создание категории
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    if($name === '' || $description === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($name, 'UTF8') < 2){
        $errMsg = "Категория должна быть более 2-х символов!";
    }else{
        $existence = selectOne('topics', ['name' => $name]);
        if($existence['name'] === $name){
            $errMsg = "Такая категория существует!";
        }else{
            $topic = [
            'name' => $name,
            'description' => $description
        ];
        $id = insert('topics', $topic);
        $topic = selectOne('topics', ['id' => $id] );
        header('location: ' . base_url . "admin/topics/index.php");
        }
    }
}
else{

    $name = '';
    $discription = '';
}

//редактирование категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    if($name === '' || $description === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($name, 'UTF8') < 2){
        $errMsg = "Категория должна быть более 2-х символов!";
    }else{
        $existence = selectOne('topics', ['name' => $name]);
        if($existence['name'] === $name){
            $errMsg = "Такая категория существует!";
        }else{
            $topic = [
            'name' => $name,
            'description' => $description
        ];
        $id = $_POST['id'];
        $topic_id = update('topics', $id, $topic);
        
        header('location: ' . base_url . "admin/topics/index.php");
        }
    }
}
//удаление категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete("topics", $id);
    header('location: ' . base_url . "admin/topics/index.php");
}