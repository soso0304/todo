<?php

echo '<pre>';
/*

function hello($name) {
    return 'Hello '.$name;
}

//echo hello('Posa Bogdan');




for ($i = 0; $i <= 10; $i++){
    if($i > 5) {
        echo "ana are mere<br>";
    } else {

        echo("maria are pere<br>");
    }

}*/

$fructe = array(
    'primul' => 'mere',
    'al doilea' => 'pere',
    'al treilea' => 'portocale',
);

$fructe = array(
    'mere',
    'pere',
    'portocale',
);

foreach ($fructe as $i => $fruct) {
    echo $i,' ',$fruct,PHP_EOL,PHP_EOL;
}

$test = true;
if ($test == true){
    echo 'test == true',PHP_EOL;
}
if ($test === true) {
    echo 'test === true';
}

