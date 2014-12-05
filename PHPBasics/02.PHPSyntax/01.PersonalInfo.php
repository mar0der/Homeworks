<?php
function printText($firstName, $lastName){
    $age = 25;
    $fullName = $firstName." ".$lastName;
    echo "My name is $fullName and I am ".$age." years old<br /> \n\r";
}

printText("Pesho", "Peshev" );
printText("Mister", "DakMan");
?>

