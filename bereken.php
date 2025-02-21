<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$button = $_GET['button'];

if($button == "add") {
    $result = $num1 + $num2;
}
echo "<h2>result : $result</h2>";
?>