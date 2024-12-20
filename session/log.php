<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="" method="POST">
      <label for="">Nom user</label>
      <input type="text" name="nom">
      <br>
      <label for="">Password</label>
      <input type="password" name="password">
      <button type="submit">connecter</button>
   </form>

   <?php

      
      session_start();
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $con=new mysqli('localhost','root','','SessinCookies');

      $_nomUser=$_POST['nom'];
      $_Password=$_POST['password'];
    
      $sql=$con->prepare("SELECT * FROM SesCoo");
      $sql->execute();
  
      $result=$sql->get_result();
      $data=$result->fetch_assoc();

      if($_nomUser=$data['nom_SC']){
        $_SESSION['nom_SC'] = $_nomUser;
        header('Location: admin.php');
      }
    }
   ?>
</body>
</html>