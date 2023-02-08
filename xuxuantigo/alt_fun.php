<?php		
    $id=$_POST['id'];                
    $nome= $_POST['nome'];		
    $end=$_POST['end'];               
    $fone=$_POST['fone'];
    $cpf=$_POST['cpf'];	
    $dn=$_POST['dn']; 	
    $sexo=$_POST['sexo'];                             

       $sql="update funcionario set id='$id',nome='$nome',end='$end',fone='$fone',cpf='$cpf',dn='$dn',sexo='$sexo' where id=$id";

    $con=mysqli_connect("127.0.0.1","root","","xuxu");      		
	    if (mysqli_connect_errno())	
        {echo "Failed to connect to MySQL:".mysqli_connect_error(); }                                   
                      
        mysqli_query($con, $sql);
	    echo "<center><h2>Dados do funcionário alterados com sucesso!</center></h2><p><br>";       

    mysqli_close($con);		
?> 
    <center><h2><a href="altdelfun.php">VOLTAR</a></h2></center>