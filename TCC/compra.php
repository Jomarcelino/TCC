<?php session_start(); 
  include_once("servidor.php")
?>

<!DOCTYPE html>
<head>
     <title>COMPRA</title> 
     <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

h3 .TITULO{
    background-color: brown;
    width: 100%;
    padding: 10px;
    text-align: center;
}

.carrinho-container{
    margin: 5px;
    display: flex;
}

.produto{
    width: 30%;
    padding: 20px;
}

.produto img{
    max-width: 100%;
}

.produto a{
    display: block;
    width: 100%;
    padding: 5px;
    color: #f5f5dc;
    background-color: blueviolet;
    text-align: center;
    text-decoration: none;
}

.carrinho-produto{
    max-width: 700px;
    margin: 5px auto;
}

.carrinho-produto p{
    font-size: 30px;
    color: aqua;
}

table td{
    border:1px solid #000000;
    margin:2px;
    padding: 5px;
    text-align:center

}

     </style>
</head>
<body>

<h3 div class="TITULO">COMPRA</h3>
<div class="carrinho-container">
<?php
    $items = array( 
         ['nome'=>'Caixa com Bricadeiro Tradicional', 'imagem' => 'caixatradicional2.jpg','preco' => '1.89'],
         ['nome'=>'Barquinho', 'imagem' => 'barquinho.jpg','preco' => '2.89'],
         ['nome'=>'Caixa com Bricadeiro Gourmet', 'imagem' => 'caixagourmet2.jpg','preco' => '2.39'],
         ['nome'=>'Pote Plastico com Bricadeiro Gourmet 1', 'imagem' => 'poteplastico3.jpg','preco' => '2.39'],
         ['nome'=>'Unidade', 'imagem' => 'unidade.jpg','preco' => '2.39'],
         ['nome'=>'Caixinha com dua Unidades', 'imagem' => 'potecaixinha2.jpg','preco' => '2.39'],
         ['nome'=>'Pote Plastico com Bricadeiro Gourmet 2',  'imagem' => 'poteplastico2.jpg','preco' => '2.39']
        
        );





        foreach($items as $key => $value) {           
?>
     <div class="produto"> 
        <img src="<?php echo $value ['imagem']?>"/>
        <a href="?ADICIONAR=<?php echo $key?>">ADICIONAR AO CARRINHO</a>

     </div>
<?php
        }
?>
</div>

<?php

    if(isset($_GET['ADICIONAR'])){
       $idProduto = (int) $_GET['ADICIONAR'] ;
         if(isset($items[$idProduto])){
           //print_r ( $items[$idProduto]);
            if(isset($_SESSION['carrinho'][$idProduto])){
           (int)$_SESSION ['carrinho'][ $idProduto]['Quantidade']++;
             // print_r($_SESSION['carrinho'][$idProduto]);
  
 
            }else{
              $_SESSION['carrinho'][$idProduto] = array('Quantidade'=>1 ,'nome' =>$items[$idProduto]['nome'],  'preco'=>$items[$idProduto]['preco']);

           
            }
            echo '<script>alert("O PRODUTO FOI ADICIONADO AO CARRINHO !!!")</script>';
         }else{
           die('Esse produto acabou !!!');
         }
    }
?>

<h1 class="TITULO">CARRINHO</h1>
<?php
//unset($_SESSION['carrinho']);
//print_r($_SESSION['carrinho']);

echo "<table class='carrinho-produto'>";
  echo "<tr>
         <th>Produto</th>
         <th>Valor Un</th>
         <th>Quantidade</th>
         <th>Valor </th>
        </tr>";
if(isset($_SESSION['carrinho'])){
   foreach($_SESSION['carrinho'] as $key => $value){
     echo "<tr> 
             <td> "
            . $value['nome']. 
             "</td>
             <td>"
             .$value['preco'].
             "</td>
             <td>"
             .$value['Quantidade'].
             "</td>
             <td>
                 R$"  .(   (float)$value['Quantidade']  *  (float) $value['preco']).
             "</td>
             </tr>";

           
   }
}
echo "<table>";
?>
</body>
</html>