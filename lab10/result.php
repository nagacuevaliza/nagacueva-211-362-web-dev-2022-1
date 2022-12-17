<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Нагацуева 211-362 lab10</title>
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
              <li class="menu_item">Лабораторная работа №10</li>
            </ul>
          </div>
      </div>
    </header>

    <main class="body">
        <p>Исходный текст: </p>
        <? 
            function test_symbs($text){
                $symbs=array();
                $l_text=strtolower($text);
                $ids = [];
                for ($i=0; $i<strlen($l_text); $i++){
                    if (isset($symbs[$l_text[$i]])){
                        $symbs[$l_text[$i]]++;
                    } else {
                        $symbs[$l_text[$i]] = 1;
                        $ids[] = $l_text[$i];
                    }
                }
                foreach ($ids as $id){
                    echo '
                    <tr class="result_text">
                        <td>'.iconv("cp1251","utf-8",$id).'</td>
                        <td>'.$symbs[$id].'</td>
                    </tr>';
                }
            }

            function test_it($text){
                echo '<div class="styletable">';
                echo '<table class="tables">';
                echo '<tbody>';
                echo '
                <tr>
                    <td>Количество символов</td>
                    <td>'.strlen($text).'</td>
                </tr>';
                $cifra = array( '0'=>true, '1'=>true, '2'=>true, '3'=>true, '4'=>true,
                                '5'=>true, '6'=>true, '7'=>true, '8'=>true, '9'=>true);
                $cifra_amount = 0;
                $word_amount = 0;
                $word = '';
                $words = array();
                $znaks = [',', '.', '!', '?', ':', ';', '-'];
                $znak = 0;
                $keys = [];
                $count_buks = 0;
                $count_buks_zugl = 0;
                $count_buks_strok = 0;
                $alf1 = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 
                        'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'];
                $alf2 = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 
                        'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'];
                for ($i = 0; $i < strlen($text); $i++){
                    if (array_key_exists($text[$i], $cifra)){
                        $cifra_amount++;
                    }
                    if ($text[$i] == ' ' || $i == strlen($text) - 1 || in_array($text[$i], $znaks)){
                        if ($word){
                            if (isset($words[$word])){
                                $words[$word]++;
                            } else {
                                $words[$word] = 1;
                                $keys[] = $word;
                            }
                        }
                        if (in_array($text[$i], $znaks)){
                            $znak++;
                        }
                        $word = '';
                    }else{
                        $word.=$text[$i];
                        if (preg_match('/[a-zA-Z]/', iconv("cp1251","utf-8",$text[$i])) || preg_match('/[а-яА-Я]/', iconv("cp1251","utf-8",$text[$i]))){
                            $count_buks++;
                        }
                        if (preg_match('/[a-z]/', iconv("cp1251","utf-8",$text[$i])) || in_array(iconv("cp1251","utf-8",$text[$i]), $alf1)){
                            $count_buks_strok++;
                        }
                        if (preg_match('/[A-Z]/', iconv("cp1251","utf-8",$text[$i])) || in_array(iconv("cp1251","utf-8",$text[$i]), $alf2)){
                            $count_buks_zugl++;
                        }

                    }
                }
                echo '
                <tr>
                    <td>Количество букв</td>
                    <td>'.$count_buks.'</td>
                </tr>';
                
                echo '
                <tr>
                    <td>Количество строчных букв</td>
                    <td>'.$count_buks_strok.'</td>
                </tr>';
                echo '
                <tr>
                    <td>Количество заглавных букв</td>
                    <td>'.$count_buks_zugl.'</td>
                </tr>';
                echo '
                <tr>
                    <td>Количество знаков</td>
                    <td>'.$znak.'</td>
                </tr>';
                echo '
                <tr>
                    <td>Количество цифр</td>
                    <td>'.$cifra_amount.'</td>
                </tr>';
                asort($keys);
                foreach ($keys as $key){
                    echo '
                    <tr>
                        <td>'.iconv("cp1251","utf-8",$key).'</td>
                        <td>'.$words[$key].'</td>
                    </tr>';
                }
                echo '
                <tr>
                    <td>Количество слов</td>
                    <td>'.array_sum($words).'</td>
                </tr>';
                test_symbs($text);
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
            }

            if(isset($_POST['text']) && $_POST['text']){
                echo '<div class="src_text">'.$_POST['text'].'</div>';
                test_it(iconv("utf-8", "cp1251", $_POST['text']));
            } else {
                echo '<div class="src_error">Нет текста для анализа</div>';
            }
        ?>
        <div class="button_drug"><a href="index.html">Другой анализ</a></div>
    </main>
    <footer class="footer">
        <div class="wrap">
          <div class="footer_wrap">
            <p>Нагацуева Елизавета</p>
            <p>lizanagacueva@gmail.com</p>
          </div>
        </div>
    </footer>
</body>
</html>