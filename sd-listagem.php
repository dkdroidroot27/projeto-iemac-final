<?php
$connect = mysqli_connect('localhost', 'root', '1234', 'projetoiemac', '3306');
$querynow = "select * from pessoa";
$result = mysqli_query($connect, $querynow);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="datatables/js/jquery.dataTables.min.js"></script>            
    <script type="text/javascript" src="datatables/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="datatables/css/dataTables.bootstrap.min.css"> 
    <script>
        $(document).ready(function () {
            $('#tabela').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>
    <title>Listagem de Pessoas | Projeto IEMAC</title>
    <style type="text/css" media="screen">
    body{
        margin-top: 15px;
    }
    .jumbotron{
        background-color: #ddd
    }
</style>
</head>
<body>

    <?php 
    session_start();
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.php');
    }
    ?>

    <div class="container-fluid">

        <?php include("minifier/navbar-main.php"); ?>

        <div class="jumbotron">
            <h1>Listagem de Dados com DataTables</h1>
            <br>
            <p align="justify">Dados em tabela sendo exibidos utiizando DataTables, o plugin jQuery para tabelas dinâmicas. O DataTables fornece um meio mais simples de pesquisar dados em uma tabela, organizar os dados para otimizar tamanho na página, limitando a quantidade de dados a serem exibidos. Em alguns dos casos, pode ajudar, gerando relatórios em .pdf, .csf entre outros, de acordo com os dados exibidos em tabela.</p>
        </div>

        <fieldset>
            <legend><h1>Lista de Pessoas</h1></legend>
        </fieldset>

        <!-- Tabela com DataTables -->
        <div class="table-responsive">
            <table id="tabela" class="table table-striped table-bordered">
                <thead>
                    <tr> 
                        <td>Nome</td>
                        <td>Endereço</td>
                        <td>Telefone</td>
                        <td>Pai</td>
                        <td>Status Sistema</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <?php
                while ($rows = mysqli_fetch_array($result)) {
                    echo '<tr>
                    <td>' . $rows['nomepessoa'] . '</td>
                    <td>' . $rows['endpessoa'] . '</td>
                    <td>' . $rows['telpessoa'] . '</td>
                    <td>' . $rows['paipessoa'] . '</td>
                    <td>' . $rows['statuspessoa'] . '</td>
                    <td>
                        <a href="sd-alteracao.php?id='.$rows['idpessoa'].'" class="btn btn-default btn-primary">Alterar</a>
                        <a href="sd-desativacao.php?id='.$rows['idpessoa'].'" class="btn btn-default btn-warning">Desativar</a>
                        <a href="sd-ativacao.php?id='.$rows['idpessoa'].'" class="btn btn-default btn-success">Ativar</a>
                        <a href="sd-exclusao.php?id='.$rows['idpessoa'].'" class="btn btn-default btn-danger">Deletar</a>
                    </td>    
                    </tr>';
                }
                ?>
            </table>
        </div>

    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>