<!DOCTYPE html>
<html lang="ru">
  <head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
  </head>
  
  <body>
    <header class="header" id="header">
      <div class="wrap">
        <div class="header_wrap">
          <div class="logo"><a href="/index.html"></a>FEATURES OF FRIENDS</div>
          <nav class="nav">
            <ul class="menu">
              <li class="menu_item">
                <?= ' <a href="./feedback_form.php">Обратная связь</a>' ?>
              </li>
              <li class="menu_item">
                <?= ' <a href="./login_form.php">Войти</a>' ?>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>