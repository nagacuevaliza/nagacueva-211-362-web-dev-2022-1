 <?php
 
 echo "<div class='fullblock'>";
 for ($i = 1; $i < 10; $i++) {
    echo " <div class='fullblock-row'>";
    for ($j = 1; $j < 10; $j++) {
        echo "<div class='fullblock__item'><a class='num-link' href='?content=".$i."&type=block'>".$i."</a> * <a class='num-link' href='?content=".$j."&type=block'>".$j."</a> = ".($i*$j)."</div>";
    }

    echo "</div>";
 }



 
?>