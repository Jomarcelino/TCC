<?php session_start(); 
  include_once("servidor.php");
  $sql = 'SELECT * FROM tb_doces,';
    // $result = $banco->query($sql);
?>

<!DOCTYPE html>

<head>
    <title>COMPRA</title>
    <link rel="stylesheet" href="css/Style-prod.css">
</head>
<header>
        <nav>
            <a class="logo"> <img src="./imagens/logo2s.png"/></a>

            <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            </div>

            <ul class="nav-list">
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="Produtos.php ">PRODUTOS</a></li>
                <li><a href="compra.php">COMPRA</a></li>
                <li><a href="contatos.html">CONTATOS</a></li>
            </ul>
        </nav>
    </header>
    <style>@import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    </style>

<body>
   <main>

   <table class="table">
  <thead>
		<tr class="tabler">
			<th scope="col">Produto</th>
			<th scope="col">Preço</th>
			<th scope="col">Quantidade</th>
			<th scope="col">Valor total</th>
		</tr>
  </thead>
  <tbody>

  <?php
			// while($user_data = mysqli_fetch_assoc($result))
			// 	{
			// 			echo "<tr class='tabler'>";
			// 				echo "<td>";
            //                 echo $sql = "SELECT * FROM `tb_doces` WHERE Doc_Codigo = $user_data['Doc_Codigo']";
            //                 echo "</td>";
            //             echo "</tr>";
			// 	}
    ?>
    <?php

      $totalCompra = 0;
if(isset($_SESSION['carrinho'])){
   foreach($_SESSION['carrinho'] as $key => $value){

    $valorTotalProduto = (float)$value['Quantidade']  *  (float) $value['preco'];

     echo "<tr> 
             <td> "
            . $value['nome']. 
             "</td>
             <td>"
             .number_format($value['preco'], 2, ',', '.').
             "</td>
             <td>"
             .$value['Quantidade'].
             "</td>
             <td>
                 R$" . number_format($valorTotalProduto, 2, ',', '.').
             "</td>
             </tr>";
             $totalCompra += $valorTotalProduto;
             
   }

  // $totalCompra += $valorTotalProduto;
      echo"<tr>
          <th>Valor Total: </th>
          <td>
            R$"  . number_format($totalCompra, 2, ',', '.') .
          "</td>
      </tr>";
}
echo "</table>";
?>

</main>
<script src="mobile-navbar.js"></script>
</body>
</html>