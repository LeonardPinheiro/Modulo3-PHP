<?php
    //SHA1 - Criptografia de 160 Bits, 40 caracteres alfa-numericos.

    $texto = "Um texto aleatório qualquer";

    echo "Texto Original: " . $texto . '<br><br>';

    $criptografia = sha1($texto);

    echo "Texto com criptografia SHA1: " . $criptografia;
?>