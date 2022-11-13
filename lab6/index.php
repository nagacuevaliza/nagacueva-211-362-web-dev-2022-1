<?php
$title="FEATURES OF FRIENDS";

$today= date("d.m.y");
$time = date("G:i:s", time()+10800);

$menu_list = ["Главная", "Актеры", "О героях сериала", "Контакты"];
$id_list = ["header", "photos", "about_heroes", "footer-info"];

$friends;



if(((int)date("s") % 2) == 0){
    $friends = "friends1";
} else {
    $friends = "friends2";
}
?>

<?php require("elements/header.php")?>

<?php require("elements/main.php")?>

<?php require("elements/footer.php")?>