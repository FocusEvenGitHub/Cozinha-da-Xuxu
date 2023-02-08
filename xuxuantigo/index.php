<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=0, initial-scale=1">
	<link rel="stylesheet" href="xuxu.css">
	<link rel="icon" href="imagem/logo.png">
    <title>Cozinha da Xuxu</title>
</head>
<body>
	<input type="checkbox" id="chec">
	<label class="label" for="chec">
		<img src="menu2.png" width="60" height="60">
	</label>
	<nav class="menu">
		<ul class="menu">
			<li><a class="btntypo" href="index.php">		Home</a></li>
			<li><a class="btntypo" href="cadcli.php">	Cadastrar como cliente</a></li>
			<li><a class="btntypo" href="Login/log.php">	Log-In</a></li>
			<!--
			<li><a class="btntypo" href="cadfun.php">	Cadastrar como funcionário</a></li>
			<li><a class="btntypo" href="altdelcli.php">Lista de clientes</a></li>
			<li><a class="btntypo" href="altdelfun.php">Lista de funcionários</a></li>
			-->
		</ul>
	</nav>
	<section class="topo">
		<img src="imagem/logo.png">
	</section>
	<section id="geral">
		<div class="conteudo">
			<div class="row"> <!-- divider em roleta -->
				<div class="contentBx">
					<h2>Como funciona a Cozinha da Xuxu?</h2>
					<a>	Para reservas é necessário contactar através do nosso WhatsApp as seguintes informações:<br>
					<br>1°  Qual o nome da pessoa que virá buscar
					<br>2°  Qual prato escolhido
					<br>3°  Quantos pratos serão
					<br>4°  Para viagem ou comer no local
					<br>5°  Se para viagem, qual das nossas embalagens será
					<br>6°  Se for executivo, informar se é com Carne ou Frango</a> <br>
					<img src="imagem/embalagens.png" width="200px">
					<div class="btnspace">
						
						<button class="btn1"><a href="https://wa.me/556184149164" target="_blank">WhatsApp</a></button>
					
					</div>
				</div>
			</div>
			<!-- <div class="row">  divider em roleta
				<div class="contentBx">
					<h3 class="title">Prato do dia</h3>
				</div>	
				<div class="imgBx">
					<video autoplay muted loop src="video/to render.mp4">
				</div>
			</div> -->
			<div class="column">

			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
				
				<div class="toggle-buttondiv">
					<h1>Cardápio</h1>
				 	<button id="toggle-button">
					 <span class="material-symbols-outlined">view_list</span>
					 <span class="material-symbols-outlined">grid_view</span>
					</button>
				</div>
				<div class="menu-grid">
					<div class="menu-item">
						<img src="imagem/Salada.png" alt="Imagem de Salada" width="200" height="200">
						<div class="flex-right">
						<h2 style="font-family: Quicksand, cursive;">Salada</h2>
						<p>Carne ou Frango 100g<br>
						Salada 250g</p>
						<p>Preço: R$ 10,00</p>
					 	</div>
					</div>
					<div class="menu-item">
						<img src="imagem/luis.png" alt="Imagem de Luis" width="200" height="200">
						<div class="flex-right">
						<h2 style="font-family: Quicksand, cursive;">Luis</h2>
						<p>Carne ou Frango		100g
						<br>Arroz							150g<br>
							Feijão							150g<br>
							Salada							100g
						</p>
						<p>Preço: R$ 20,00</p>
						</div>
					</div>
					<div class="menu-item">
						<img src="imagem/barsa.png" alt="Imagem de Barsa" width="200" height="200">
						<div class="flex-right">
						<h2 style="font-family: Quicksand, cursive;">Barsa</h2>
						<p>
						Carne ou Frango		100g<br>
						Arroz				150g<br>
						Fritas				150g<br>
						Anel Cebola			30g<br>
						Salada				100g
						</p>
						<p>Preço: R$ 25,00</p>
						</div>
					</div>
				</div>
			</div>

    <script>
      const toggleButton = document.getElementById("toggle-button");
      const menuGrid = document.querySelector(".menu-grid");

      toggleButton.addEventListener("click", function() {
        if (menuGrid.style.display === "grid") {
          menuGrid.style.display = "flex";
        } else {
          menuGrid.style.display = "grid";
        }
      });
    </script>
			
		</div>
	</section>
	
	<!-- RODAPE + LINK BOOTSTRAP-->
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