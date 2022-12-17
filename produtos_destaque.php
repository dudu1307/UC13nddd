<?php 

include "conn/connect.php";
$lista = $conn->query("select * from vw_tbprodutos where destaque_produto = 'sim'");
$row_destaque = $lista->fetch_assoc();
$num_linha = $lista->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 class="breadcrumb alert-danger"><strong>Destaques</strong></h2>
    <div class="row">
         <?php do{ ?> <!-- Início - Estrutura de Repetição -->
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <a href="produto_detalhe.php?id_produto=<?php echo $row_destaque['id_produto']; ?>">
                <img src="images/<?php echo $row_destaque['imagem_produto'];?>" alt=""
                class="img-responsive img-rounded" style="height: 20em;">
            </a>
            <div class="caption text-right">
                <h3 class="text-danger">
                    <strong><?php echo $row_destaque['descri_produto'];?></strong>
                </h3>
                <p class="text-warning">
                    <strong><?php echo $row_destaque['rotulo_tipo'];?></strong>
                    </p>
                    <p class="text-left">
                    <?php echo mb_strimwidth($row_destaque['resumo_produto'],0,40,'...');?>
                    </p>
                    <p>
                        <button class="btn btn-default disabled" role="button" style="cursor: default;" >
                        <?php echo "R$ ".number_format($row_destaque['valor_produto'], 2,',','.');?>
                        </button>
                        <a href="produto_detalhe.php?id_produto=<?php echo $row_destaque['id_produto']; ?>"
                        ><span class="hidden-xs">Saiba mais...</span>
                        <span class="hidden-xs glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                    </p>
            </div>
            </div>
            <!-- Final - Thumbnail/Card -->
            </div>
            <?php } while($row_destaque = $lista->fetch_assoc());?>
    </div>
</body>
</html>