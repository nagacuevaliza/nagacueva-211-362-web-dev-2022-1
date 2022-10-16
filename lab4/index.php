<?php
	include 'header.html';
?>

<?php
$title="FEEDBACK FORM";

$today= date("d.m.y");
$time = date("G:i:s", time()+10800);

$email = 'email@example.com';
if(isset($_POST['email'])) {
   $email = $_POST['email']; 
}

?>

<?php require("elements/form.php")?>

<?php require("elements/footer.php")?>