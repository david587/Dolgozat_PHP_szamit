<!--
File: calc.php
Author: Baráth Dávid
Copyright: 2022, Baráth Dávid
Group: Szoft 1 N
Date: 2022.05.26
Github: https://github.com/david587/
Licenc: GNU GPL
-->
<?php
echo file_get_contents("templates/head.html");
$page= file_get_contents("templates/calc.html");

function calcCrowd($testtomeg,$testmagassag,){
    $height= pow(2,(double)$testmagassag);
    $result = $testtomeg / $height;
    return $result;
}
if(!empty($_GET["testtomeg"]) and
   !empty($_GET["testmagassag"]) 
   ){

    $testtomeg = $_GET["testtomeg"];
    $testmagassag = $_GET["testmagassag"];
   
    $result= calcCrowd($testtomeg,$testmagassag);
}else{
    $result="Hiba! Helytelen bemenő adatok";
}

$round = sprintf("%0.2f", $result);





$page=str_replace("{{ result }}",$round,$page);
echo $page;
echo file_get_contents("templates/foot.html");
