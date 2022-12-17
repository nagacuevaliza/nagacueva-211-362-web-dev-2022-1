<?php

$num = 2;
if (isset($_GET["content"])) {
    $num = $_GET["content"];
    if (is_numeric($num)) {
        echo "
        <div class='result'>
            <div class='result__item'>".$num." * <a class='num-link' href='?content=2&type=block'>2</a> = ".($num*2)."</div>
            <div class='result__item'>".$num." * <a class='num-link' href='?content=3&type=block'>3</a> = ".($num*3)."</div>
            <div class='result__item'>".$num." * <a class='num-link' href='?content=4&type=block'>4</a> = ".($num*4)."</div>
            <div class='result__item'>".$num." * <a class='num-link' href='?content=5&type=block'>5</a> = ".($num*5)."</div>
            <div class='result__item'>".$num." * <a class='num-link' href='?content=6&type=block'>6</a> = ".($num*6)."</div>
            <div class='result__item'>".$num." * <a class='num-link' href='?content=7&type=block'>7</a> = ".($num*7)."</div>
            <div class='result__item'>".$num." * <a class='num-link' href='?content=8&type=block'>8</a> = ".($num*8)."</div>
            <div class='result__item'>".$num." * <a class='num-link' href='?content=9&type=block'>9</a> = ".($num*9)."</div>
        </div>
        ";
    } else {
        require("block_fulltable.php");
    }
} else {
    require("block_fulltable.php");
}
?>