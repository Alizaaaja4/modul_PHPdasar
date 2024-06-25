<?php
// variabel scope/ lingkup variabel
// ada variabel global dan local
$a = 10;

function tampilX(){
    global $a;
    echo $a;
}

tampilX();
?>