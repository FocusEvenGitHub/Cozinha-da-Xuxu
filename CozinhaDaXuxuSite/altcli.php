<html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=0, initial-scale=1">
	<link rel="stylesheet" href="xuxu.css">
	<link rel="icon" href="imagem/logo.png">
	<script src="JS/validadeForm"></script>
    <title>Cozinha da Xuxu</title>
</head>
	<body>
<?php	
	$id= $_POST['id'];	
        $con=mysqli_connect("127.0.0.1","root","","xuxu"); 

	    if (mysqli_connect_errno())
	    {echo "Failed to connect to MySQL:".mysqli_connect_error();}

        $result=mysqli_query($con,"SELECT * FROM cliente WHERE id='$id'");	
?>
<p>
<section id="geral">
	<div class="alter">
		<table id="myTable">
			<form action="alt_cli.php" method="post">
				<?php while($row=mysqli_fetch_array($result)) { 
				?>	
					 <tr>
						<td>Nome:</td> 
						<td><label><input type="text" name="nome" value="<?php echo $row['nome']; ?>"> </label></td>
					</tr>
					<tr>
						<td>Endereço:</td> 
						<td><label><input type="text" name="end" value="<?php echo $row['end']; ?>"> </label></td>
					</tr>
					<tr>
						<td>Telefone:</td> 
						<td><label><input type="text" name="fone" value="<?php echo $row['fone']; ?>"> </label></td>
					</tr>
					<tr>
						<td>CPF:</td> 
						<td><label><input type="text" name="cpf" value="<?php echo $row['cpf']; ?>" ></label></td>
					</tr>
					<tr>
					
						<td>Data de Nascimento:</td> 
						<td>
						<label><input type="text" name="dn" value="<?php echo $row['dn']; ?>"> </label>
					</tr>
					<tr>
						<td>Sexo:</td> 
						<td>
						<label> <input type="radio" name="sexo" value="F<?php echo $row['sexo']; ?>"> Feminino </label>
								<input type="radio" name="sexo" value="M<?php echo $row['sexo']; ?>"> Masculino </label>
						</td>
					</tr>
				</table>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

				<button class="btn2"type="submit" name="enviar" value="ok">	Alterar	</button>
			</form>
		</table>
	</div>
</section>
<?php } ?></p>

</body>
</html>