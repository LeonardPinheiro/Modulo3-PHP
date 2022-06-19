<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Info Usuário</title>
</head>
<body>

        <?php
            if(!isset($_SESSION)){
                session_start();
            }
            require_once '../Model/Usuario.php';
            require_once '../Controller/UsuarioController.php';
            require_once '../Controller/FormacaoAcadController.php';
            require_once '../Controller/ExperienciaProfissionalController.php';
        ?>

        <div class="w3-padding-128 w3-content w3-text-grey">
            
                <div>
                    <header class="w3-container w3-padding-32 w3-center " >
                        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">Informações do Usuário</h1>
                    
                        <div class="w3-padding-128 w3-content w3-text-grey" >
                            <div class="w3-container">
                                <table class="w3-table-all w3-centered">
                                <thead>
                                    <tr class="w3-center w3-cyan w3-text-white">
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Email</th>
                                        <th>Data Nascimento</th>
                                    </tr>
                                </thead>
                                
                                <?php

                                    $usuario = new AdministradorController();
                                    $results = $usuario->gerarUsuarioInformacoes($_POST['idMostrarFormacoes']);
                                    if($results != null){
                                        while($row = $results->fetch_object()){
                                            echo '<tr>';
                                            echo '<td style="width: 20%;">'.$row->nome.'</td>';
                                            echo '<td style="width: 50%;">'.$row->cpf.'</td>';
                                            echo '<td style="width: 50%;">'.$row->email.'</td>';
                                            echo '<td style="width: 50%;">'.$row->dataNascimento.'</td>';
                                            echo '</tr>';
                                        }
                                    }
                                ?>
                                </table>
                            </div>
                        </div>
                    </header>

                    <h2 class="w3-center w3-text-black w3-panel w3-white"> Formações Academicas</h2>

                    <div class="w3-padding-128 w3-content w3-text-grey" >
                        <div class="w3-container">
                            <table class="w3-table-all w3-centered">
                            <thead>
                                <tr class="w3-center w3-blue">
                                    <th>Início</th>
                                    <th>Fim</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                                <?php
                                        $fCon = new AdministradorController();
                                        $results = $fCon->gerarListaFA($_POST['idMostrarFormacoes']);

                                        if($results != null){
                                            while($row = $results->fetch_object()){
                                                echo '<tr>';
                                                echo '<td style="width: 20%;">'.$row->inicio.'</td>';
                                                echo '<td style="width: 20%;">'.$row->fim.'</td>';
                                                echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                                                echo '</tr>';
                                            }
                                        }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="w3-container">

                    <h2 class="w3-center w3-text-black w3-panel w3-white"> Experiencia Profissional</h2>

                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-center w3-blue">
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Empresa</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>

                        <?php
                            $ePro = new ExperienciaProfissionalController();
                            $results = $ePro->gerarLista($_POST['idMostrarFormacoes']);

                            if($results != null){

                                while($row = $results->fetch_object()){
                                    echo '<tr>';
                                    echo '<td style="width: 20%;">'.$row->inicio.'</td>';
                                    echo '<td style="width: 20%;">'.$row->fim.'</td>';
                                    echo '<td style="width: 30%;">'.$row->empresa. '</td>';
                                    echo '<td style="width: 40%;">'.$row->descricao.'</td>';
                                    echo '</tr>';
                                }
                            }
                        ?>
                    </table>
                </div>

                <div class="w3-padding-128 w3-content w3-text-grey">
                    <form action="../Controller/navegacao.php" method="POST" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center" style="width: 30%;">
                        <div class="w3-row w3-section">
                            <div>
                                <button name="btnVoltarListaCadastro" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">Voltar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
</body>
</html>