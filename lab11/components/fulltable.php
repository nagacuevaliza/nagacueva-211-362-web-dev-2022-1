<?php
echo '<table class="fulltable" border="1px">';

for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++) {
        echo '
            <td class="fulltable__td"><a class="num-link" href="?content='.$j.'&type=table" >'.$j.'</a>*<a class="num-link" href="?content='.$i.'&type=table" >'.$i.'</td>
            <td class="fulltable__td">'.($i*$j).'</td>
    ';
    }
    echo "</tr>";
}

echo '</table>';

?>