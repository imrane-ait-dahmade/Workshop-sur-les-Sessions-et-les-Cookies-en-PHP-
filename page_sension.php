<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-full  flex justify-center item-center">
    <div class="bg-white w-fit">
<form action="" method="post" class=" flex flex-col space-y-4">
    <div class=" flex flex-col">
  <label for="nom">name_user</label>
  <input type="text" name="nom" value="">
  </div>
  <div class="flex flex-col">
  <label for="password">password</label>
  <input type="password" name="password">
  </div>
<button type="submit">submit</button>
<a href="logout.php">log out</a>
</form>



    </div>
</body>
</html>
<?php


session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
  if($_POST['nom'] ==="imrane" && $_POST["password"] === "hello123"){
    $_SESSION['name'] = $_POST['nom'];
    $_SESSION['password'] = $_POST['password'];
$_SESSION['prenom'] = " welcom  ".$_SESSION['name'] . "  ait dahmade";
if($_SESSION['name'])
echo $_SESSION['prenom'] ;

  }
}


?>