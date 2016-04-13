<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 09.04.16
 * Time: 11:51
 */
//$data = array(
//    array(
//      'name'=>'1N',
//      'email' =>'2N',
//      'date'=> date("Y-m-d"),
//      'message' => '3N'
//    ),
//    array(
//        'name'=>'1o',
//        'email' =>'2o',
//        'date'=> date("Y-m-d"),
//        'message' => '3o'
//    ),
//    array(
//        'name'=>'1ot',
//        'email' =>'2ot',
//        'date'=> date("Y-m-d"),
//        'message' => '3ot'
//    ),
//);
include_once("model.php");

$error = [];

//функция на валидацию данных от пользователя и сохранение вбазу данных
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['massage']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
        echo "<h3>Данные будут сохранены </h3>";//это пока просто для примера
        $data1 = array(
            'email' => $_POST['email'],
            'name' =>  $_POST['name'],
            'message' => $_POST['massage'],
            'date' => date("Y-m-d H:i:s"),
        );
    save($data1);
}else{
    $error["notdata"] = "Fields entered incorrectly";
}

$data = load();
require_once ("template.php");
//из базы данных вывод на страницу







