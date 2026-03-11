<?php

$package = $_GET['package'];

$file = $package . ".php";

if(file_exists($file)){
    include($file);
}else{
    echo "Package not found";
}

?>