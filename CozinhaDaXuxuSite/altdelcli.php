<?php
  session_start();
  
  if (!isset($_SESSION['username'])) {
    header('Location: Login/log.php');
  }
?>
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
            <li><a class="btntypo" href="index.php">	Home</a></li>
            <li><a class="btntypo" href="Login/dashboard.php">	Dashboard</a></li>

		</ul>
	</nav>
    <section class="topo">
			<img src="imagem/logo.png">
    </section>
	<section id="geral">
		<div class="change">
            <h2><a style="color:#fff" href="home.php">VOLTAR</a></h2>
            <?php $con=mysqli_connect("localhost","root","","xuxu"); 
    if (mysqli_connect_errno())  
    {echo "Failed to connect to MySQL: ".mysqli_connect_error();}
    
    $result = mysqli_query($con,"SELECT * FROM cliente");?><p> <a style="color:#fff">Procurar por</a>
        <input class="search" type="text" id="myInput" onkeyup="myFunction()" placeholder="Nome ou CPF">
        <table id="myTable">
                <thead>
                    <tr>  
                        <th>ID</th> 
                        <th>Nome</th> 
                        <th>Endereço</th> 
                        <th>Telefone</th> 
                        <th>Sexo</th>                                                        
                        <th>Data de Nascimento</th> 
                        <th>CPF</th> 
                        <th>Deleta</th>
                        <th>Alterar</th>
                    </tr>
                </thead>
                <?php while($row = mysqli_fetch_array($result))
                { ?>
                <tbody>  	
                        <tr>	
                            <td><?php echo $row['id']; ?></td>	
                            <td><?php echo $row['nome']; ?></td>
                            <td><?php echo $row['end']; ?></td>
                            <td><?php echo $row['fone']; ?></td>
                            <td><?php echo $row['sexo']; ?></td>  
                            <td><?php echo $row['dn']; ?></td>      
                            <td><?php echo $row['cpf']; ?></td>
                            <td><form action="delcli.php" method="post"> 
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"> 
                                <button type="submit" name="delcli" value="ok" > <img src="imagem/excluir.png"> </button> </form></td>
                            <td><form action="altcli.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"> 
                                <button type="submit" name="altcli" value="ok">  <img src="imagem/troca.png">  </button> </form></td>
                        </tr>
                    <?php } mysqli_close($con);?>
                </tbody>
            </table>

            <script>
            function myFunction() {
                // Obtém o valor digitado no campo de entrada
                var input, filter, table, tr, td, i, txtValue1, txtValue2;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");

                // Loop através de todas as linhas da tabela
                for (i = 0; i < tr.length; i++) {
                    td1 = tr[i].getElementsByTagName("td")[1];
                    td2 = tr[i].getElementsByTagName("td")[6];
                    if (td1 || td2) {
                    txtValue1 = td1.textContent || td1.innerText;
                    txtValue2 = td2.textContent || td2.innerText;
                    if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    }       
                }
            }
            </script>
        </div>
    </section>
</body>
</html>
       