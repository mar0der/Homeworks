<?php
for($i=1; $i<=date("t");$i++){
    $date = strtotime("2014/12/$i");
    if(date("N", $date) == "7"){
        echo date("jS F o", $date)."<br />\n\r";
    }
}
?>
