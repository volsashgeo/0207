<?php

$url = explode('/', $_SERVER['REQUEST_URI']);
require_once("php/classes/User.php");
require_once("php/db.php");
// if($url[1] == blog) {
//     require_once("blog.html");
// }else if($url[1] ==cart) {
//     require_once("cart.html");
// }


if($url[1] == "auth") {
    $content = file_get_contents("pages/login.html");
}else if($url[1] == "reg") {
    $content = file_get_contents("pages/register.html");
}else if($url[1] == "blog") {
    $content = file_get_contents("pages/blog.html");

}else if($url[1] == "users") {
    require_once("pages/users/index.php");
}else if ($url[1] == "addUser") {
    echo User::addUser($_POST["name"], $_POST["lastname"], $_POST["email"], $_POST["pass"]);
}else if($url[1] == "authUser") {
    echo User::authUser($_POST["email"], $_POST["pass"]);
}else {
    $content = file_get_contents("pages/index.php");  
}
// $content = file_get_contents("pages/index.php");
if(!empty($content))
require_once("template.php");





// $url = $url[0];
// for($i=0; $i<count($url); $i++) {

// echo $url[$i]."<hr>";
// }