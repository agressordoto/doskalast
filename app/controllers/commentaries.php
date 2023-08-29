<?php
//контроллер 

$page = $_GET['post'];
$email = '';
$comment = '';
$errMsg = '';
$status = 0;
$comments = [];

//код для формы создания комментария
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['goComment'])){
 
    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);

    
    if($email === '' || $comment === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($comment, 'UTF8') < 10){
       $errMsg = "Комментарий должен быть длинее 10 символов!";
    }else{
        $user = selectOne('users', ['email' => $email]);
        if ($user['email'] == $email && $user['admin'] == 1){
            $status = 1;
        }

            $comment = [
            'status' => $status,
            'page' => $page,
            'email' => $email,
            'comment' => $comment

        ];
        
        $comment = insert('comments', $comment);
        $comment = selectAll('comments', ['page' => $page, 'status' => 1] );
        }
    }

else{
    $email = '';
    $comment = '';
    $comment = selectAll('comments', ['page' => $page, 'status' => 1] );
}
