<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <style media="screen">
      h1
      {
        text-align: center;
        font-size: 50px;
      }
      h2
      {
        margin-left: 100px;
      }
      body
      {
        background-image: url("bg.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }
      input[type="text"]
      {
        border: none;
        height:30px;
        width: 400px;
        margin-left: 70px;
      }
      input[type="password"]
      {
        margin-left: 30px;
        border: none;
        height:30px;
        width: 400px;
      }
      input[type="submit"]
      {
        border: none;
        margin-left:300px;
        margin-bottom: 100px;
        width: 400px;
        padding: 30px;
        border-radius: 20px;
        background-color: rgba(255,255,255,0.9);
      }
      input[type="submit"]:hover
      {
        border: none;
        margin-left:300px;
        margin-bottom: 100px;
        width: 400px;
        padding: 30px;
        border-radius: 20px;
        background-color: rgba(0,0,0,0.9);
        color: white;
      }
      .contain
      {
        margin-top: 300px;
        margin-left: 500px;
        width:50%;
        height:90%;
        background-color: rgba(255,255,255,0.6);
      }
    </style>
  </head>
  <body>
    <div class="contain">
      <br>
    <h1>LOGIN</h1>
    <form class="" action="login.php" method="post">
      <h2> Enter your name
      <input type="text" name="id" required></h1>
      <h2>Enter your password
        <input type="password" name="password" required></h1>
        <br><br>
        <input type="submit">
    </form>
  </div>

<?php
if(isset($_POST["id"]))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$c = mysqli_connect($servername,$username,$password,$dbname);
if(!$c)
{
    echo("conection failed!<br>");
}
else
{
//  echo("conection established!<br>");
  $q = "SELECT * FROM userdb";
  $res = mysqli_query($c,$q);
  while(($val = mysqli_fetch_assoc($res))!=NULL)
  {
    if(strtolower($val["name"]) == strtolower($_POST["id"]) && $val["password"] == $_POST["password"])
      {
        // "FIFA","FARCRY","INJUSTICE2","Assassin's Creed Origins","DarkSides3","Forza","NFS payback"
        $check = "TRUE";
        $_SESSION["name"] = $val["name"];
        $_SESSION["pass"] = $val["password"];
        if($val["FIFA"] == 1)
        {
          $_SESSION["game"] = "FIFA";
          break;
        }

        if($val["FARCRY"] == 1)
        {
          $_SESSION["game"] = "FARCRY";
          break;
        }

        if($val["INJUSTICE"] == 1)
        {
          $_SESSION["game"] = "INJUSTICE2";
          break;
        }

        if($val["AC"] == 1)
        {
          $_SESSION["game"] = "Assassin's Creed Origins";
          break;
        }

        if($val["DS"] == 1)
        {
          $_SESSION["game"] = "DarkSides3";
          break;
        }
        if($val["Forza"] == 1)
        {
          $_SESSION["game"] = "Forza";
          break;
        }

        if($val["NFS"] == 1)
        {
          $_SESSION["game"] = "NFS payback";
          break;
        }

        $_SESSION["game"] = "N";
        break;


      }
    else
    {
      $check = "FALSE";
    }
  }
if($check == "TRUE")
{
  echo "WELCOME ".$val["name"];
  header("Location:http://localhost/WT_PROJECT_3SEM_test/Games/index.php ");
}
else {
  echo "TRY AGAIN";
//  echo $val["Name"];
 }
}
}


 ?>

</body>
</html>
