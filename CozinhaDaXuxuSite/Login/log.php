<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=0, initial-scale=1">
    <link rel="stylesheet" href="Layoutlog.css">
    <link rel="icon" href="../imagem/logo.png">
    <title>Cozinha da Xuxu</title>
</head>

<body>
    <input type="checkbox" id="chec">
    <label class="label" for="chec">
		<img src="../menu2.png" width="60" height="60">
	</label>
    <nav class="menu">
        <ul class="menu">
            <li><a class="btntypo" href="../index.php">		Home</a></li>
            <li><a class="btntypo" href="../cadcli.php">	Cadastrar como cliente</a></li>
            <li><a class="btntypo" href="log.html">	Log-In</a></li>
            <!--
			<li><a class="btntypo" href="../cadfun.php">	Cadastrar como funcionário</a></li>
			<li><a class="btntypo" href="../altdelcli.php">Lista de clientes</a></li>
			<li><a class="btntypo" href="../altdelfun.php">Lista de funcionários</a></li>
			-->
        </ul>
    </nav>
    <section class="topo">
        <img src="../imagem/logo.png">
    </section>
    <section id="geral">
        <div class="conteudo">
			<?php
  			session_start();
			?>
            <form action="login.php" method="post">
                <div>
                    <label for="username">Usuário:</label>
                    <input type="text" id="username" name="username">
                </div>
                <div>
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit">Logar</button>
            </form>

            <script>
                document.querySelector('form').addEventListener('submit', function(event) {
                    const username = document.querySelector('#username').value;
                    const password = document.querySelector('#password').value;

                    if (!username || !password) {
                        event.preventDefault();
                        alert('Please enter a username and password');
                    }
                });
            </script>

    </section>
    <!-- RODAPE + LINK BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <footer class="bg-dark text-white py-3">
        <div class="container">
            <div class="text-center my-4">
                <img src="../imagem/logo_footer.png" alt="Logo" width="100" height="100">
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