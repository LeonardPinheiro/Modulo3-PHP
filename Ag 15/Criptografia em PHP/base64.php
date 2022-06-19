<?php
    //BASE64 - Criptografia semelhante ao md5 e sha1.

    $texto = 'Pão de Queijo com Café';

    echo "Texto Original: " . $texto . '<br><br>';

    $criptografia = base64_encode($texto);

    echo "Texto Criptografado com BASE64: " . $criptografia . '<br><br>';

    $descriptografia = base64_decode($criptografia);

    echo "Texto Descriptografado: " . $descriptografia . '<br><br>';
?>