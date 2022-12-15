<?php
$type = 'E';	// тип верстки 
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Нагацуева 211-362 lab9</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
  </head>

  <body>
    <header class="header" id="header">
      <div class="wrap">
        <div class="header_wrap">
          <div><img src="./images/logo.png" alt="logo" width="200px" style="margin-bottom: 10px;"/></div>
            <ul class="menu">
              <li class="menu_item">Нагацуева Елизавета Замировна</li>
              <li class="menu_item">Группа 211-362</li>              
              <li class="menu_item">Лабораторная работа №9</li>
              <li class="menu_item">Вариант №10</li>
            </ul>
          </div>
      </div>
    </header>
    
    <main>
      <div class="wrapper">
        <div class="main__wrapper">
        <?php 
          if ($type == "B") echo '<ul>';
          if ($type == "C") echo '<ol>';
          if ($type == "D") echo '<table border=1>';
         ?>
         <?php if($type == "D") {
          echo '
            <tr>
              <td>i</td>
              <td>x</td>
              <td>F</td>
            </tr>
          ';
         }
         ?>
        <?php
            $x = -10;	// начальное значение аргумента
            $encounting = 100;	// количество вычисляемых значений
            $step = 2;	// шаг изменения аргумента
            $sum = 0; // сумма

            $min = 9999999; 
            $max = 0;

            $max_value = 100;
            $min_value = -40;
            
            $i = 0;
            $count = 0;

            for($i = 0; $i < $encounting; $i++, $x+=$step) {
              if ($x <= 10){
                if ($x == 0){
                  $f = 'error';
                }
                else {
                  $f = (3/$x) + ($x/3) - 5;
                }
              }
              
              if ($x > 10 && $x < 20) {
                $f = ($x-7)*($x/8);
              }

              if ($x >= 20) {
                  $f = 3*$x+2;
                } 
            
             
              $count++;
              if ($f != 'error'){
                $f = round($f, 3);
              }
            
              if (($f != 'error') && ($f >= $max_value || $f < $min_value)) {
                break;
              }
          
              switch ($type) {
                case 'A':
                  echo 'F('.$x.') = '.$f.'</br>';
                  break;
                
                case 'B':
                  echo '<li>F('.$x.') = '.$f.'</li>';
                  break;

                case 'C':
                  echo '<li>F('.$x.') = '.$f.'</li>';
                  break;

                case 'D':
                  echo '
                  <tr>
                    <td>'.$i.'</td>
                    <td>'.$x.'</td>
                    <td>'.$f.'</td>
                  </tr>
                  ';
                  break;

                case 'E':
                  echo '<div class="function">F('.$x.') = '.$f.'</div>';
                  break;

                default:
                  echo 'Не выбран тип верстки';
              }
            if ($f != 'error'){
              $sum += $f;
              if ($f > $max) {
                  $max = $f;
                }

                if ($f < $min) {
                  $min = $f;
                }
            }
                              
            }

            // -- Цикл do..while
            // do {
            //   if ($x <= 10){
            //     if ($x == 0){
            //       $f = 'error';
            //     }
            //     else {
            //       $f = 3/$x + $x/3 - 5;
            //     }
            //   }
              
            //   if ($x > 10 && $x < 20) {
            //     $f = ($x-17)/(8-$x*0.5);
            //   }

            //   if ($x >= 20) {
            //       $f = 3*$x+2;
            //     } 
            
             
            // $count++;
            // if ($f != 'error'){
            //   $f = round($f, 3);
            // }
            
            // if (!($f <= $max_value && $f > $min_value)) {
            //   break;
            // }
          
            //   switch ($type) {
            //     case 'A':
            //       echo 'F('.$x.') = '.$f.'</br>';
            //       break;
                
            //     case 'B':
            //       echo '<li>F('.$x.') = '.$f.'</li>';
            //       break;

            //     case 'C':
            //       echo '<li>F('.$x.') = '.$f.'</li>';
            //       break;

            //     case 'D':
            //       echo '
            //       <tr>
            //         <td>'.$i.'</td>
            //         <td>'.$x.'</td>
            //         <td>'.$f.'</td>
            //       </tr>
            //       ';
            //       break;

            //     case 'E':
            //       echo '<div class="function">F('.$x.') = '.$f.'</div>';
            //       break;

            //     default:
            //       echo 'Не выбран тип верстки';
            //   }

            // if ($f != 'error'){
            //   $sum += $f;
            //   if ($f > $max) {
            //       $max = $f;
            //     }

            //     if ($f < $min) {
            //       $min = $f;
            //     }
            // }
          
           
            //   $i++; 
            //   $x += $step;
            // } while ($i < $encounting && ($f <= $max_value && $f > $min_value));


            // ---------------------------------
            // while ($i < $encounting && ($f <= $max_value && $f > $min_value)) {
            //   if ($x <= 10){
            //     if ($x == 0){
            //       $f = 'error';
            //     }
            //     else {
            //       $f = 3/$x + $x/3 - 5;
            //     }
            //   }
              
            //   if ($x > 10 && $x < 20) {
            //     $f = ($x-17)/(8-$x*0.5);
            //   }

            //   if ($x >= 20) {
            //       $f = 3*$x+2;
            //     } 
            
             
            // $count++;
            // if ($f != 'error'){
            //   $f = round($f, 3);
            // }
            
            // if (!($f <= $max_value && $f > $min_value)) {
            //   break;
            // }
          
            //   switch ($type) {
            //     case 'A':
            //       echo 'F('.$x.') = '.$f.'</br>';
            //       break;
                
            //     case 'B':
            //       echo '<li>F('.$x.') = '.$f.'</li>';
            //       break;

            //     case 'C':
            //       echo '<li>F('.$x.') = '.$f.'</li>';
            //       break;

            //     case 'D':
            //       echo '
            //       <tr>
            //         <td>'.$i.'</td>
            //         <td>'.$x.'</td>
            //         <td>'.$f.'</td>
            //       </tr>
            //       ';
            //       break;

            //     case 'E':
            //       echo '<div class="function">F('.$x.') = '.$f.'</div>';
            //       break;

            //     default:
            //       echo 'Не выбран тип верстки';
            //   }

            // if ($f != 'error'){
            //   $sum += $f;
            //   if ($f > $max) {
            //       $max = $f;
            //     }

            //     if ($f < $min) {
            //       $min = $f;
            //     }
            // }
          
           
            //   $i++; 
            //   $x += $step;
            // } 



              
        ?>
         <?php 
          if ($type == "B") echo '</ul>';
          if ($type == "C") echo '</ol>';
          if ($type == "D") echo '</table>';
         ?>
          </div>
          <?php  echo 'Максимум: '.$max.'</br>'; ?>
          <?php  echo 'Минимум: '.$min.'</br>'; ?>
          <?php if ($i != 0) {
            echo 'Среднее: '.$sum / $i.'</br>';
          } else {
            echo 'Среднее: '.$sum / $count.'</br>';
          }?>
          <?php  echo 'Сумма: '.$sum.'</br>'; ?>
          <?php  echo '</br>'; ?>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="wrap">
        <div class="footer_wrap">
        <p>Тип верстки: <?php echo $type; ?></p>
        </div>
      </div>
    </footer>
    
  </body>
</html>
