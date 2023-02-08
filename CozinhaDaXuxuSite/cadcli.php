<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=0, initial-scale=1">
	<link rel="stylesheet" href="xuxu.css">
	<link rel="icon" href="imagem/logo.png">
	<script src="JS/validadeForm"></script>
    <title>Cozinha da xuxu</title>
</head>
<body>
	<input type="checkbox" id="chec">
	<label class="label" for="chec">
	<img src="menu2.png" width="60" height="60">
	</label>
	<nav class="menu">
		<ul class="menu">
			<li><a class="btntypo" href="index.php">	Home</a></li>
            <li><a class="btntypo" href="Login/dashboard.php">	Dashboard</a></li>

		</ul>
	</nav>
	<section class="topo">
		<img src="imagem/logo.png">
	</section>
	<section id="geral">
		<div class="cadastro">
			<div id="panel">
			<h1>Cadastro do Cliente</h1> <p><br><p>
				<!-- Abaixo Form para Validar em JS-->
                <form id="myForm" onsubmit="return validateForm()"  
				action="cad_cli.php" method="POST"> <!-- Post em PHP para o banco de dados SQL-->
					<table> <tr>
						<td>Nome:</td> 
						<td><input type="text" name="nome" placeholder="Nome Completo"></td>
					</tr>
					<tr>
						<td>Endereço:</td> 
						<td><input type="text" name="end"></td>
					</tr>
					<tr>
						<td>Telefone:</td> 
						<td><input type="text" name="fone" placeholder="DDD 00000-0000" oninput="formatPhone(this)" maxlength="13"></td>
					</tr>
					<tr>
						<td>CPF:</td> 
						<td><input type="text" name="cpf" placeholder="000.000.000-00" oninput="formatCPF(this)" maxlength="14"></td>
					</tr>
					<tr>
					
						<td>Data de Nascimento:</td> 
						<td>
							<input type="text" name="dn" placeholder="AAAA-MM-DD" oninput="formatDate(this)"></td>
					</tr>
					<tr>
						<td>Sexo:</td> 
						<td>
							<input type="radio" name="sexo" value="M">Masculino
							<input type="radio" name="sexo" value="F">Feminino
						</td>
					</tr>
				</table>
					<input class="btn2" type="submit" value="Cadastrar">
                </form>
		</div>
	</section>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<footer class="bg-dark text-white py-3">
		<div class="container">
			<div class="text-center my-4">
			<img src="imagem/logo_footer.png" alt="Logo" width="100" height="100">
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="https://www.google.com/search?client=opera-gx&q=cozinha+da+xuxu&sourceid=opera&ie=UTF-8&oe=UTF-8" class="btn btn-secondary  btn-block py-3" target="_blank">
					<h5>Sobre nós</h5>
					<p>Informações sobre a empresa.</p>
					</a>
				</div>
				<div class="col-md-4">
					<a href="https://g.page/r/CYlFl_ZJdt2eEB0/review" class="btn btn-secondary  btn-block py-3" target="_blank">
					<h5>Feedback</h5>
					<p>Deixe seu comentário ou sugestão.</p>
					</a>
				</div>
				<div class="col-md-4">
					<a href="https://api.whatsapp.com/send?phone=5561984149164" class="btn btn-secondary  btn-block py-3" target="_blank">
					<h5>Contato</h5>
					<p>Entre em contato conosco.</p>
					</a>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>