
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>

<body>
    <div class="container">

<?php
include_once('servidor.php');   
if(!empty($_GET['Doc_Codigo'])){

$sql = "DELETE FROM tb_doces WHERE Doc_Codigo= '".$_GET['Doc_Codigo']."'";
$apagar = mysqli_query($banco, $sql);

echo "<script type='text/javascript'>
        alert('Item deletado');
        </script>";

header("Location: listaDoce.php");
}
?>
</body>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>

</html>