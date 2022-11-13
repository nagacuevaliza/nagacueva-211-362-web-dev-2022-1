<?php
	include 'header.html';
?>

<?php

$title="FEEDBACK FORM";

$today= date("d.m.y");
$time = date("G:i:s", time()+10800);
?>

<div class="answer">
<?= '<p> Здравствуйте, '.$_POST['fio'].'</p>';
  if ($_POST['typeOf'] == 'Предложение'){ 
         echo '<p>Спасибо за ваше предложение:</p>';
         echo '<textarea  r d>'.$_POST['message'].'</textarea>';
  }else{
         echo '<p>Мы рассмотрим Вашу жалобу:</p>';
         echo '<textarea>'.$_POST['message'].'</textarea>';
  }

  if (isset($_POST['file']) & $_POST['file'] != '') {
    echo '<p> Вы приложили следующий файл: '.$_POST['file'].'</p>';
  }else{
    echo '<p>  </p>';
  }
  

//кнопка заполнить снова

echo '<a href="index.php?F='.$_POST['fio'].'&E='.$_POST['email'].'&M='.$_POST['message'].'&R='.$_POST['radioValue'].'">
<button class="btn">Заполнить снова</button></a>';

?>

<?php require("elements/footer.php")?>