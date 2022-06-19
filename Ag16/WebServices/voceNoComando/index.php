<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <title>Cadastro</title>
</head>
<body>

    <?php
        
        //função que consultará os dados
        function get_endereco($cep){
            //formatar CEP
            $cep = preg_replace("/[^0-9]/", "", $cep);
            $url = "http://www.viacep.com.br/ws/$cep/xml";
            $xml = simplexml_load_file($url);
            return $xml;
        }

        //verifica a sessão
        if(!isset($_SESSION)){
            session_start();
        }

        //Popula a sessão com dados vazios
        $_SESSION["nome"] = "";
        $_SESSION["cep"] = "";
        $_SESSION["logradouro"] = "";
        $_SESSION["numero"] = "";
        $_SESSION["bairro"] = "";
        $_SESSION["cidade"] = "";
        $_SESSION["estado"] = "";

        //verifica o click no botão
        if(isset($_POST["btnBuscar"])){
            $endereco = get_endereco($_POST["txtCEP"]);
            $_SESSION["nome"] = $_POST["txtNome"];
            $_SESSION["cep"] = $_POST["txtCEP"];
            $_SESSION["logradouro"] = (string)$endereco->logradouro;
            $_SESSION["numero"] = $_POST["txtNumero"];
            $_SESSION["bairro"] = (string)$endereco->bairro;
            $_SESSION["cidade"] = (string)$endereco->localidade;
            $_SESSION["estado"] = (string)$endereco->uf;
        }


    ?>

    <div class="w3-padding-128 w3-content w3-text-grey w3-center" id="">
        <h2 class="w3-text-black">Cadastro e Consulta</h2>
        <form action="#" method="post" class="w3-row w3-text-blue w3-center" style="width: 70%;">
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge w3-white fa fa-user"></i>
                </div>

                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="<?php echo $_SESSION["nome"];?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge w3-white far fa-envelope-open"></i>
                </div>

                <div class="w3-col" style="width:50%;">
                    <input class="w3-input w3-border w3-round-large" name="txtCEP" type="text" placeholder="Ex: 11111000 (apenas números)" value="<?php echo $_SESSION["cep"];?>">
                </div>

                <div class="w3-rest">
                    <button name="btnBuscar" class="w3-button w3-black w3-round-large w3-right w3-hover-green" style="width: 95%;">Buscar Endereço</button>
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge w3-white fas fa-home"></i>
                </div>

                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtLogradouro" type="text" placeholder="Rua, Avenida e etc." value="<?php echo $_SESSION["logradouro"];?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <span class="w3-xxlarge w3-white">Nº</span>
                </div>

                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtNumero" type="text" placeholder="Número ex (1111)" value="<?php echo $_SESSION["numero"];?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge w3-white fas fa-home"></i>
                </div>

                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtBairro" type="text" placeholder="Bairro." value="<?php echo $_SESSION["bairro"];?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge w3-white fas fa-map-marked"></i>
                </div>

                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtCidade" type="text" placeholder="Cidade." value="<?php echo $_SESSION["cidade"];?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge w3-white fas fa-map-marked-alt"></i>
                </div>

                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtEstado" type="text" placeholder="Estado." value="<?php echo $_SESSION["estado"];?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-center">
                    <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-black w3-cell w3-round-large w3-hover-green" style="width: 90%;">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>