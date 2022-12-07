<?php
include_once('servidor.php');

session_start();

if(empty($_GET["Doc_Codigo"]) OR ($_GET["Doc_Codigo"] == 0)) {
    echo "<script type='text/javascript'>
    alert('Selecione um produto na página de ver produtos!');
    window.location.href = 'listaDoce.php';
    </script>";
}
else {

    $id = $_GET['Doc_Codigo'];

    $sqlSelect = "SELECT * FROM tb_doces WHERE Doc_Codigo=$id";

    $resposta = mysqli_query($banco, $sqlSelect);

    //colocar os campos
    $campo = mysqli_fetch_array($resposta);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>Alterar doce</title>
</head>

<body>
    

<div class="container">
        <div class="row">
            <section class="col-md-2">

            </section>
            <section class="col-md-8">
                <a href="adm.php">Voltar</a>
                <h3 class="mt-5">Alterar Doces</h2>

                    <form action="procAltDoce2.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $campo["Doc_Codigo"] ?>">    
                    
                    
                    <div class="form-group">
                            <label for="nome">Nome do doce : </label>
                            <input type="text" class="form-control" id="nome" name="nome" 
                            value="<?php echo $campo["Doc_Nome"] ?>">
                        </div>

                        <div class="form-group " style="width:30%;">
                            <label for="valor">Valor: </label>

                           <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                    </div>
                                        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $campo["Doc_Preco"] ?>">             
                                    </div>
                                </div>

                        <div class="form-group">
                            <label for="desc">Descrição : </label>
                            <textarea name="desc" class="form-control" id="desc" placeholder="<?php echo $campo["Doc_Descricao"] ?>"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="dir">Imagem do doce : </label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="arq" name="arq" >
                                <label class="custom-file-label" for="arq">procurar arquivo</label>
                            </div>
                        </div>

                        
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </form>
            </section>

            <section class="col-md-2"></section>
        </div>
    </div>



<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
</body>


</html>

<?php } ?>
