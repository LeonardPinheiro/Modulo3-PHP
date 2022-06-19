<?php
    //MD5 - Criptografia de 128 bits, 32 caracteres alfa-numericos .

    $texto = 'Pão de Queijo';

    echo "Texto Original:"  . $texto .'<br><br>';

    $criptografia = md5($texto);

    echo "Texto Criptografado com o MD5: " . $criptografia;
?>