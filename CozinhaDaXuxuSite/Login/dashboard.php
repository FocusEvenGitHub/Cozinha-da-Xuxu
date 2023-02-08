<?php
  session_start();
  
  if (!isset($_SESSION['username'])) {
    header('Location: log.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=0, initial-scale=1">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="icon" href="../imagem/logo.png">
  <title>Dashboard</title>
</head>
<body>
<header>
	<img src="../imagem/logo.png" width="60px">
  <nav>
    <ul>
      <li><a href="../cadcli.php">Cadastro de cliente</a></li>
      <li><a href="../cadfun.php">Cadastro de funcionário</a></li>
      <li><a href="../altdelcli.php">Alterar cliente</a></li>
      <li><a href="../altdelfun.php">Alterar funcionário</a></li>
    </ul>
  </nav>
  <div class="hello">
  <?php

    $username = $_SESSION['username'];
    ?> <p>Olá, <?php echo"$username</p>"?>
	<a class="userinfo" href="logout.php"><button>Logout</button></a> 
</div>
</header>
  <main>
  	
  </main>
</body>
</html>
