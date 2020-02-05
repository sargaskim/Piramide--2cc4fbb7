<?php

$computter1 = 'Hoeveel stapels wil je hebben?'.PHP_EOL;

$aantal = readline('');

for ($i = 1; $i <= $aantal; $i++) {
    $a .= '*';
    
    echo $a.PHP_EOL;
}


?>