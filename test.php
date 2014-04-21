<?php

$rows = 5;
$cols = 5;
$color = 'yellow';

echo '<table border="1" width="300">';

for($tr=1; $tr<=$rows; $tr++){
    echo '<tr>';
    
        for($td=1; $td<=$cols; $td++){
            if($tr==1 || $td==1)
                echo "<th style='background:{$color}'>" . $td * $tr . "</th>";
            else
                echo '<td>' . $td * $tr . '</td>';
        }
    
    echo '</tr>';
}

echo '</table>';
