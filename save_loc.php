<?php

$my_file = fopen("loc.txt" , "w");

$information = "lat:" . $_GET["lat"] . "long:" . $_GET["long"];


fwrite($my_file , $information)
fclose($my_file)


?>