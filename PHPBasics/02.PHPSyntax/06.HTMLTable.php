<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Information Table</title>
        <style>
            table, tr, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
            }
            
            tr td:first-of-type {
                font-weight: bold;
                background-color: orange;
            }
            
            tr td:last-of-type {
                text-align: right;
            }
        </style>
    </head>
    <body>
<?php
function printTable($data){
        echo "<table>";
        foreach ($data as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        echo "</table><br />";
}
printTable(array('Name' => 'Gosho', 'Phone number' => '0882-321-423', 'Age' => '24', 'Address' => 'Hadji Dimitar'));
printTable(array('Name' => 'Pesho', 'Phone number' => '0884-888-888', 'Age' => '67', 'Address' => 'Suhata Reka'));
?>
  </body>
</html>