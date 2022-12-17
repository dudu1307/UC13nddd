<?php
// incluindo o sistema de autentificação
include("acesso_com.php");
// incluir o arquivo e fazer a conexão
include("../conn/connect.php");

if ($_POST) {
    // orgarnizar os campos na mesma ordem 
    $id_tipo    =   $_POST['id_tipo'];
    $sigla_tipo   =   $_POST['sigla_tipo'];
    $rotulo_tipo     =   $_POST['rotulo_tipo'];

    // campo do formulario para filtrar o resgistro (where)
    $id = $_POST['id_tipo'];

    // consulta sql para atualização de dados 
    $updateSQL = "UPDATE tbtipos 
                SET  id_tipo = '$id_tipo', 
                     sigla_tipo = '$sigla_tipo',
                     rotulo_tipo = '$rotulo_tipo'
                WHERE id_tipo = $id ";
    $resultado = $conn->query($updateSQL);
    if ($resultado) {
        header("Location: tipos_lista.php");
    }
}
//  consulta para trazer e filtrar os dados
if ($_GET) {
    $id_form = $_GET['id_tipo'];
} else {
    $id_form = 0;
}
$lista = $conn->query("SELECT * FROM tbtipos WHERE id_tipo = $id_form");
$row = $lista->fetch_assoc();
$totalRows = ($lista)->num_rows;

// selecionar os dados da chave estrangeira 
$tabela_fk      =   "tbtipos";
$ordenar_por    =   "rotulo_tipo ASC";
$consulta_fk    =   "SELECT *
                    FROM " . $tabela_fk . "
                    ORDER BY " . $ordenar_por . " ";
// Fazer a lista completa dos dados
$lista_fk       =   $conn->query($consulta_fk);
// Separar os dados em linhas(row)
$row_fk         =   $lista_fk->fetch_assoc();
// Contar o total de linhas
$totalRows_fk   =   ($lista_fk)->num_rows;
?>

<!-- html:5 -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos - Atualiza</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
</head>

<body class="fundofixo">
    <?php include "menu_adm.php"; ?>
    <main class="container">
        <div class="row">
            <!-- Abre row -->
            <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                <!-- Dimensionamento -->
                <h2 class="breadcrumb text-danger">
                    <a href="produtos_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Atualizar Tipo
                </h2>
                <!-- abre thumbnail -->

                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="tipos_atualiza.php" id="form_tipo_atuliaza" name="form_tipo_atualiza" method="post" enctype="multipart/form-data">
                            <!-- inserir o campo id_tipo oculto para uso em filtros -->
                            <input type="hidden" name="id_tipo" id="id_tipo" value="<?php echo  $row['id_tipo']; ?>">
                            <!-- select id_tipo -->
                            <label for="id_tipo">Tipo:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <!-- select>option*2 -->
                                <select name="id_tipo" id="id_tipo" class="form-control" required>
                                    <!-- Abre estrutura de repetição -->
                                    <?php do { ?>
                                        <option value="<?php echo $row_fk['id_tipo']; ?>" 
                                        <?php
                                            if (!(strcmp($row_fk['id_tipo'], $row['id_tipo']))) {
                                              echo "selected=\"selected\"";
                                             };?>>
                                            <?php echo $row_fk['rotulo_tipo']; ?>
                                        </option>
                                    <?php } while ($row_fk = $lista_fk->fetch_assoc());
                                    $rows_fk = mysqli_num_rows($lista_fk);
                                    if ($rows_fk > 0) {
                                        mysqli_data_seek($lista_fk, 0);
                                        $rows_fk = $lista_fk->fetch_assoc();
                                    };
                                    ?>
                                    <!-- Fecha estrutura de repetição -->
                                </select>
                            </div><!-- fecha input-group -->
                            <br>
                            <label for="sigla_tipo">Sigla:</label>
                            <div class="input-group">
                                <label for="lista_tipos_c" class="radio-inline">
                                    <input type="radio" name="sigla_tipo" id="sigla_tipo" value="chu" <?php echo $row['sigla_tipo'] == "chu" ? "checked" : null; ?>>Chu
                                </label>
                                <label for="sigla_tipo_b" class="radio-inline">
                                    <input type="radio" name="sigla_tipo" id="sigla_tipo" value="Beb" <?php echo $row['sigla_tipo'] == "Beb" ? "checked" : null; ?>>Beb
                                </label>
                                    <label for="sigla_tipo_s" class="radio-inline">
                                        <input type="radio" name="sigla_tipo" id="sigla_tipo" value="sob" <?php echo $row['sigla_tipo'] == "sob" ? "checked" : null; ?>>Sob 
                                    </label>
                                </label>
                            </div>
                        <!-- btn enviar -->
                        <input type="submit" value="Atualizar" name="enviar" id="enviar" class="btn btn-danger btn-block">
                    </form>
                </div><!-- Fecha alert -->
            </div><!-- Fecha thumbnail -->
        </div><!-- Fecha Dimensionamento -->
    </div><!-- Fecha row -->
</main>

</script>

<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php 
    mysqli_free_result($lista_fk);
    mysqli_free_result($lista);
?>