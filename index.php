<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 09.04.16
 * Time: 11:51
 */
include_once("model.php");
include_once ("template.php");
$errors = [];

//функция на валидацию данных от пользователя и сохранение вбазу данных
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['massage'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $massage = $_POST['massage'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        echo "<h1 style='text-align: center;'>Все верно, данные валидны!</h1>";
        $errors[] = "Email "

    }

}else{
    $errors[] = "Все поля должны быть заполнены!";
}

//из базы данных вывод на страницу

$a = load();





