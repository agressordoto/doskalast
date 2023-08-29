<?php

session_start();
require 'connect.php';
 
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

// Проверка выполнения запроса к БД
function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}
// Запрос на получение данных с одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
 
    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            echo $sql; die();
            if ($i === 0){
                $sql = $sql . " WHERE `$key` = '$value' ";
            }else{
                $sql = $sql . " AND `$key` = '$value' ";
            }
            $i++;
        }
    }

 
    $query = $pdo->prepare($sql);
    $query->execute();  
    dbCheckError($query);
    return $query->fetchAll();
}
 
// Запрос на получение одной строки с выбранной таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
 
    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value ";
            }else{
                $sql = $sql . " AND $key = $value ";
            }
            $i++;
        }
    }
//    $sql = $sql . " LIMIT 1";
 
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}
 
// $params = [
//     'admin' => 1,
//     'username' => 'Geliy'
// ];
 
// //tt(selectAll('users', $params)); // выводит ошибку
// tt(selectOne('users'));

//Запись в таблицу БД

function insert($table, $params){
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';
     foreach ($params as $key => $value) {
        if ($i === 0){
            $coll = $coll . "$key";
            $mask = $mask . "'" ."$value" . "'";
        }else {
        $coll = $coll . ", $key";
        $mask = $mask . ", '" . "$value" . "'";
        }
        
        $i++;

    }

    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
    
}
// $arrData = [
//     'admin' => '1',
//     'username' => '22212221',
//     'email' => 're1536@re.ru',
//     'password' => '1231sdf3',
//     'created' => '2021-06-20 13:07:21',
//     'telephone' => '12313'
// ];

// insert('users', $arrData);

// Обновление строки в таблице
function update($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
     foreach ($params as $key => $value) {
        if ($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        }else {
        $str = $str ."" . $key . "= '" . $value . "'";
        }
        
        $i++;

    }

    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    
}
// функция делит
function delete($table, $id){
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    
}
