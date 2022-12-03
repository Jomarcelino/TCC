<?php
// iniciar session;
session_start();
// incluir o servidor
include_once('servidor.php');

// if(isset($_GET['Doc_Codigo']))
//            {$id = $_GET['Doc_Codigo'];
//                $sql = "SELECT * FROM tb_doces WHERE Doc_Codigo=$id";
//                $result = $banco->query($sql);
//                if($result->num_rows > 0)
//                {
//                    while($_POST = mysqli_fetch_assoc($result))
//                    {
//                        $nome = $_POST['nome'];
//                        $desc = $_POST['desc'];
//                        $arq = $_POST['imagem'];
//                        $valor = $_POST['valor'];
//                     // $imagem = $_FILES['arq']['name'];
//                    }
//                }
//                else
//                {
//                    header('Location:listaDoce.php');
//                }
//            }
//            else
//            {
//                header('Location:listaDoce.php');
//            }

            $nome = $_POST['nome'];
            $desc = $_POST['desc'];
            $valor = $_POST['valor'];
            $dir = $_FILES['arq']['name'];
            // echo $ed = $_POST["ed"];

            if(isset($_GET['Doc_Codigo'])){

            $sql = "UPDATE `tb_doces` SET `Doc_Nome`='nome',
                                          `Doc_Preco`='valor',
                                          `Doc_Descricao`='desc',
                                          `Doc_Img`='dir' WHERE 1";
            $result = mysqli_query($banco, $sql);
            }
            
            
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
                <h3 class="mt-5">Altera Doces</h2>

                    <form action="procAltDoce.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="Doc_codigo" value="<?php echo $id['Doc_codigo'] ?>">    
                    
                    
                    <div class="form-group">
                            <label for="nome">Nome do doce : </label>
                            <input type="text" class="form-control" id="nome" name="nome" 
                            value="<?php echo $nome['Doc_Nome']?>">
                        </div>
                        <div class="form-group">
                            <label for="desc">Descrição : </label>
                            <textarea name="desc" class="form-control" id="desc"><?php echo $desc['Doc_Descricao']?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="dir">Imagem do doce : </label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="dir" name="dir" value="<?php echo $dir['Doc_Img']?>">
                                <label class="custom-file-label" for="arq">procurar arquivo</label>
                            </div>
                        </div>

                        <div class="form-group " style="width:30%;">
                            <label for="valor">Valor: </label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" id="valor" name="valor"
                                value="<?php echo $valor['Doc_Preco']?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update">Alterar</button>
                    </form>
            </section>

            <section class="col-md-2"></section>
        </div>
    </div>
</body>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>

</html>