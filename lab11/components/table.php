<?php

$num = 2;
if (isset($_GET["content"])) {
    $num = $_GET["content"];
    if (is_numeric($num)) {
        echo '
        <table border="1px">
            <tr>
                <td><a>'.$num.' * <a class="num-link" href="?content=2&type=table">2</a></td>
                <td>'.($num*2).'</td>
            </tr>
            <tr>
                <td>'.$num.' * <a class="num-link" href="?content=3&type=table">3</a></td>
                <td>'.($num*3).'</td>
            </tr>
            <tr>
                <td>'.$num.' * <a class="num-link" href="?content=4&type=table">4</a></td>
                <td>'.($num*4).'</td>
            </tr>
            <tr>
                <td>'.$num.' * <a class="num-link" href="?content=5&type=table">5</a></td>
                <td>'.($num*5).'</td>
            </tr>
            <tr>
                <td>'.$num.' * <a class="num-link" href="?content=6&type=table">6</a></td>
                <td>'.($num*6).'</td>
            </tr>
            <tr>
                <td>'.$num.' * <a class="num-link" href="?content=7&type=table">7</a></td>
                <td>'.($num*7).'</td>
            </tr>
            <tr>
                <td>'.$num.' * <a class="num-link" href="?content=8&type=table">8</a></td>
                <td>'.($num*8).'</td>
            </tr>
            <tr>
                <td>'.$num.' * <a class="num-link" href="?content=9&type=table">9</a></td>
                <td>'.($num*9).'</td>
            </tr>
        </table>
    ';
    } else {
        require("fulltable.php");
    }
} else {
    require("fulltable.php");
}
?>