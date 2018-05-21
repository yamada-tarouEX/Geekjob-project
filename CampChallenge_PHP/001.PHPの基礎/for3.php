<?php
$sum = 0;
for($i = 1;$i <= 100;$i++){
$answer = $sum + $i;
echo "$sum + $i = $answer<br>\n";
$sum = $sum + $i;
}
?>
