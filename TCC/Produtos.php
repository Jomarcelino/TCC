<?php
include_once('Servidor.php');

$sql = 'SELECT * FROM tb_doces';
$result = $banco->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap');
	</style>
    <link rel="stylesheet" href="css/Style-prod.css">
    <title>Doces Julietta</title>
</head>
<body>
    <main>    
        <header>
            <nav>
                <div class="logo"> <a href="home.html"> <img src="./imagens/logo2s.png" width="113px" height="100px"/></a></div>
                <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
                </div>

                <ul class="nav-list">
                    <li><a href="index.php">LOGIN</a></li>
                    <li><a href="Produtos.php">PRODUTOS</a></li>
                    <li><a href="compra.php">CARRINHO</a></li>
					<li><a href="contatos.html">CONTATOS</a></li>
                </ul>
            </nav>
        </header>
<table class="table">
  <thead>
		<tr class="tabler">
			<th scope="col">Nome</th>
			<th scope="col">Preço</th>
			<th scope="col">Descrição</th>
			<th scope="col">Quantidade</th>
			<th scope="col">Imagem</th>
		</tr>
  </thead>
  <tbody>
		<?php
			while($user_data = mysqli_fetch_assoc($result))
				{
						echo "<tr class='tabler'>";
							echo "<td style=>".$user_data['Doc_Nome']."</td>";
							echo '<td>R$'.$user_data['Doc_Preco'].'</td>';
							echo '<td>'.$user_data['Doc_Descricao'].'</td>';
							echo "<td>";
									echo "<div class='inputbox'>";
										echo "<form action='produtos.php' method='post'>";
											echo "<input type='number' name='quantidade' id='quantidade'>";
									echo "</div>";
							echo "</td>";
						echo "</tr>";
				}
				echo "<tr class='inputbutton'>";
					echo "<td colspan=5>";
						echo "<input type='submit' id='finalizar' name='finalizar' value='Adicionar ao carrinho'>";
					echo "</td>";
				echo "</tr>";
		?>
  </tbody>
  <?php echo "</form>"; ?>
</table>
</html>