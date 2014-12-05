<?php
function nonRepeatingDigits($n) {
    if ($n < 100) {
        echo "no <br />\n\r";
    } else {
        if($n > 999){
            $n = 999;
        }
        for ($i = 100; $i <= $n; $i++) {
            if (preg_match('/(?:([0-9])(?!.*\1)){3}/', $i)) {
                echo $i." ";
            }
        }
        echo "<br />\n\r";
    }
}
nonRepeatingDigits(1234);
nonRepeatingDigits(145);
nonRepeatingDigits(15);
nonRepeatingDigits(247);
?>
