<?php
include("path.php");

$errMsg = '';
//код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    $telephone = trim($_POST['telephone']);

    if($login === '' || $email === '' || $passF === '' || $telephone === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($login, 'UTF8') < 3){
        $errMsg = "Логин должен быть более 2-х символов!";
    }elseif ($passF !== $passS) {
        $errMsg = "Пароли не совпадают!";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
            'admin' => $admin,
            'username' => $login,
            'email' => $email,
            'password' => $pass,
            'telephone' => $telephone
        ];
        $id = insert('users', $post);
        $user = selectOne('users', ['id' => $id] );

        $_SESSION['id'] = $user['id'];
        $_SESSION['login'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];

        if($_SESSION['admin']){
        header('location: ' . base_url . "admin/admin.php");
        }else{
            header('location: ' . base_url);
        }
       
        //$errMsg = "Пользователь $login успешно зарегистрировался!"; 
    }
    }}
else{

    $login = '';
    $email = '';
    $telephone = '';
}
//код  для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
     $login = trim($_POST['login']);
     $pass = trim($_POST['password']);
    if($login === '' || $pass === ''){
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence = selectOne('users', ['username'=> $login]);
         if($existence && password_verify($pass, $existence['password'])){
             $_SESSION['id'] = $existence['id'];
             $_SESSION['login'] = $existence['username'];
             $_SESSION['admin'] = $existence['admin'];
    
             if($_SESSION['admin']){
              header('location: ' . base_url . "admin/admin.php");
              }else{
                  header('location: ' . base_url);
              }

       
            
             $errMsg = "Логин, либо пароль введены неверно!";
        

            }
        }
    }
 else{
     $login = '';
 }


?>