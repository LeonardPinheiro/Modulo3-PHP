<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Programação Orientada a Objetos</title>
</head>
<body>
    <?php
        //include_once 'Pessoa.php';

        //acessando a classe Pessoa com os atributos dela public
        //$p = new Pessoa();
        //$p->nome = "Zikalira";
        //$p->sobrenome = "Padro";

        //echo "Nome: ".$p->nome.' <br> '."Sobrenome :".$p->sobrenome;

        //acessando a classe Pessoa com os atributos dela private, e com getters e setters
        //$p = new Pessoa();
        //$p->setNome("Zucas");

        //echo "Nome :". $p->getNome();

        //acessando as classes Pessoa, Fisica, Juridica com o atributo da classe Pessoa protected
        require_once 'Fisica.php';
        require_once 'Juridica.php';

        $j = new Juridica();
        $j->setNome("Pedrin");
        $j->setCnpj("111111");
        echo 'Nome :'.$j->getNome().'<br>';
        echo 'Cnpj :'.$j->getCnpj();

        echo '<br>';

        $f = new Fisica();
        $f->setNome("Luquinhas");
        $f->setCpf("90909090");
        $f->mudarNome();
        echo 'Nome :'.$f->getNome().'<br>';
        echo 'Cpf :'.$f->getCpf();
    ?>
</body>
</html>