<div class="cadastro">
<?php		
    $id=$_POST['id'];                
    $nome= $_POST['nome'];		
    $end=$_POST['end'];               
    $fone=$_POST['fone'];
    $cpf=$_POST['cpf'];	
    $dn=$_POST['dn']; 	
    $sexo=$_POST['sexo'];                             

       $sql="update cliente set id='$id',nome='$nome',end='$end',fone='$fone',cpf='$cpf',dn='$dn',sexo='$sexo' where id=$id";

    
    $con=mysqli_connect("127.0.0.1","root","","xuxu");      		
	    if (mysqli_connect_errno())	
        {echo "Failed to connect to MySQL:".mysqli_connect_error(); }                                   
                      
        mysqli_query($con, $sql);
	    echo "<h2>Dados do cliente alterados com sucesso!</h2><p><br>";       

    mysqli_close($con);		
?> 
    <h2><a class="btntypo" href="altdelcli.php">VOLTAR</a></h2>
    </div>

