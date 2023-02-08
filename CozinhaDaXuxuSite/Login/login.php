<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Connect to the database
    $conn=mysqli_connect("127.0.0.1","root","","xuxu"); 
    
    // Check if the username and password exist in the database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
      // Login success
      // Start a session and redirect to the homepage
      session_start();
      $_SESSION['username'] = $username;
      header('Location: dashboard.php');
    } else {
      // Login failed
      echo '<h2>Usuário ou senha incorretos!</h2><br>tente novamente<br>';
    }
    mysqli_close($conn);
  }
?>
<html>
    <body>
        <a href="../index.php"><button><h1>VOLTAR</h1></button></a>
    </body>
</html>