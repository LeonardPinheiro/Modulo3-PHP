<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Atividade Ag09</title>
</head>
<body>
    <?php
        require_once 'Paciente.php';

        $p = new Paciente();
        $p->setNome("Claudineidson");
        $p->setRg("0000657689");
        $p->setCpf("0000999999");
        $p->setEndereco("Rua dos Chasers, N° 188");
        $p->setProfissao("Youtuber");

        echo 'Nome: '.$p->getNome();
        echo '<br>';

        echo 'RG: '.$p->getRg();
        echo '<br>';

        echo 'CPF: '.$p->getCpf();
        echo '<br>';

        echo 'Endereço: '.$p->getEndereco();
        echo '<br>';

        echo 'Profissão: '.$p->getProfissao();
    ?>
</body>
</html>