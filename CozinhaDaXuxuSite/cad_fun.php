<html>
<body>
<?php		
    $nome= $_POST['nome'];
	$end=$_POST['end'];    
    $fone=$_POST['fone'];
    $sexo= $_POST['sexo'];
    $dn= $_POST['dn'];
    $cpf= $_POST['cpf'];	
    $sql = "insert into funcionario(nome,end,fone,cpf,dn,sexo) values('$nome','$end','$fone','$cpf','$dn','$sexo')";
       $con=mysqli_connect("127.0.0.1","root","","xuxu");	

		if (mysqli_connect_errno())
		{echo "Failed to connect to MySQL: ".mysqli_connect_error();}

        mysqli_query($con,$sql);
		echo "<h2>Funcionário cadastrado com sucesso!</h2><p><br>";                
        mysqli_close($con);
 ?>              
         <h2><a href="home.php">VOLTAR</a></h2>
</body>
</html>