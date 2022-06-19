<?php
    //PASSWORDHASH - Criptografia Utilizada para senhas.

    $texto = 'Pastel de 7 Queijos';

    echo "Texto Original: " . $texto . '<br><br>';

    $criptografia = password_hash($texto, PASSWORD_DEFAULT);

    echo "Texto Criptografado com PASSWORDHASH: " . $criptografia . '<br><br>';


    //Password_verify é utulizado para verificar o hash gerado
    if(password_verify("Pastel de 8 Queijos", $criptografia)){
        echo "Texto aceito: " . $texto;
    }else{
        echo "Texto não aceito: " . $texto;
    }
?>