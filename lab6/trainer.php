<?php
$title="Авторизация";

$today= date("m.d.y");
$time = date("G:i:s");
?>

<style>
    .box {
        height: 70vh;
        text-align: center;
        padding-top: 800px;
    }

    .box h1 {
        padding-top: 200px;
    }
</style>

<?php require("elements/form_header.php")?>

<div class="box">
    <h1>Тренажер</h1>
</div>

<?php require("elements/footer.php")?>
<script src="./trainer.js"></script>