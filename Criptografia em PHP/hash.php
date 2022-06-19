<?php
    //HASH - Gera um Criptografia em alfa-numerico ou em binario de 0 e 1.

    $texto = 'Café';

    echo "Texto Original: " . $texto . '<br><br>';

    $criptografia = hash('ripemd160', $texto);

    echo "Texto Criptografado com hash 'ripemd160': " . $criptografia . '<br><br>';

    $texto = 'Café';

    echo "Texto Original: " . $texto . '<br><br>';

    $criptografia1 = hash('sha256', $texto);

    echo "Texto Criptografado com hash 'sha256': " . $criptografia1 . '<br><br>';


    //teste de quantidades geradas 

    foreach(hash_algos() as $v){
        $codificado = hash($v, $texto, false);

        echo "Algoritmo: " . $v . '<br>';
        echo "Tamanho: " . strlen($codificado). '<br>';
        echo "Texto codificado: " . $codificado . '<br>';
        echo '<br>';
    }
?>