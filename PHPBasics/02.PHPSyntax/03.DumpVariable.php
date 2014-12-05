<?php
function dump($var){
    if(is_numeric($var)){

        var_dump($var);
        echo "<br /> \n\r";
    }else{
        echo gettype($var)."<br /> \n\r";
    }
}

dump("hello");
dump(15);
dump(1.234);
dump(array(1,2,3));
dump((object)[2,34]);
?>

