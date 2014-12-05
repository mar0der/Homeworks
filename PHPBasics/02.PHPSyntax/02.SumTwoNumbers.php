<?php
function sumTwoNumbers($firstNumber,$secondNumber){
    $sum = round($firstNumber+ $secondNumber, 2);
    echo "\$firstNumber + \$secondNumber = ".$firstNumber." + ".$secondNumber." = ".$sum."<br />\n\r"; 
}
sumTwoNumbers(2,5);
sumTwoNumbers(1.567808,0.356);
sumTwoNumbers(1234.5678,333);
?>