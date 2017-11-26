<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <style>
    body
    {
      background-image: url("signup.jpg");
      background-size: cover;
      background-attachment: fixed;
    }
    input[type=text],input[type=password],input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    img
    {
      margin-left: 300px;
    }

    /* Set a style for all buttons */
    input[type="submit"] {
        background-color: #4CAF50;
        border-radius: 20px;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    .signup
    {
      margin-left: 300px;
    }
    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: black;
        border: 1px solid white;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,.signupbtn {
        float: left;
        width: 50%;
        background-color: black;
        border: 1px solid white;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
        width: 40%;
        margin: auto;
        margin-top: 2%;

    }
    .signupbtn
    {
      width: 10%;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }
    }
    .thumbs
    {
      display: flex;
      justify-content: space-between;
    }
    .check
    {
      display: flex;
      flex-direction: column;
    }
    .container2
    {
      width: 50%;
      color: white;
      margin-left: 400px;
      background-color: rgba(0,0,0,0.7);
      padding: 10px;
    }
    .h1text
    {
      margin-left: 800px;
      color: white;
      font-size: 40px;
    }
    </style>
  </head>
  <body>
    <h1 class="h1text">SIGN UP</h1>
    <div class="container2">

    <form action="signup.php" method="post">
      <h3>Enter your EMAIL : <br><input type="email" name="email" required placeholder="dave@comp.com"></h3>
      <h3>Enter username : <br><input type="text" name="id"  required placeholder="username" ></h3>
      <h3>Enter password :  <br><input type="password" required name="pass" > </h3>
      <h3>Re - Enter password: <br><input type="password" required name="repassword" > </h3>
      <h3>PLEASE SELECT A GAME YOU LIKE </h3>
      <input type="checkbox" name="game[]" id="a" checked value="FIFA 18" >
      FIFA 18<br>
      <label for="a"><img src="FIFA.JPG" width="300" height="200"></lable><br>
      <br>

      <input type="checkbox" name="game[]" id="b" value="FARCRY 5">
      FARCRY 5<br>
      <label for="b"><img src="FARCRY.JPG" width="300" height="200"></label><br>

      <input type="checkbox" name="game[]" id="c" value="INJUSTICE 2">
      INJUSTICE 2<br>
      <label for="c"><img src="INJUSTICE2.JPG" width="300" height="200"></label><br>

      <input type="checkbox" name="game[]" id="d" value="Assassin's Creed Origins">
      Assassin's Creed Origins<br>
      <label for="d"><img src="Assassin's Creed Origins.JPG" width="300" height="200"></label><br>

      <input type="checkbox" name="game[]" id="e" value="DarkSides3">
      DarkSides3<br>
      <label for="e"><img src="DarkSides3.JPG" width="300" height="200"></label><br>

      <input type="checkbox" name="game[]" id="f" value="FORZA 2017">
      FORZA 2017<br>
      <label for="f"><img src="Forza.JPG" width="300" height="200"></label><br>

      <input type="checkbox" name="game[]" id="g" value="NFS Payback">
      NFS Payback<br>
      <label for="g"><img src="NFS payback.JPG" width="300" height="200"></label><br>

      <input type="submit" value="SUBMIT">
    </form>
  </div>
    <?php
    if(isset($_POST["pass"])&& count($_POST["game"])>0)
    {
      $fifa =0;
      $far = 0;
      $IN =0;
      $AC = 0;
      $DS =0;
      $forza = 0;
      $nfs =0;
    if($_POST["pass"]==$_POST["repassword"])
    {
      if(in_array("FIFA 18",$_POST["game"]))
        $fifa = 1;

      if(in_array("FARCRY 5",$_POST["game"]))
          $far = 1;

      if(in_array("INJUSTICE 2",$_POST["game"]))
        $IN = 1;

      if(in_array("Assassin's Creed Origins",$_POST["game"]))
          $AC = 1;

      if(in_array("DarkSides3",$_POST["game"]))
        $DS = 1;

      if(in_array("FORZA 2017",$_POST["game"]))
          $forza = 1;

      if(in_array("NFS Payback",$_POST["game"]))
        $nfs = 1;


     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "project";
     $c = mysqli_connect($servername,$username,$password,$dbname);
     $q = "INSERT INTO userdb(name,email,password,FIFA,FARCRY,INJUSTICE,AC,DS,FORZA,NFS) values ('$_POST[id]','$_POST[email]','$_POST[pass]','$fifa','$far','$IN','$AC','$DS','$forza','$nfs')";
     if($_POST["pass"] == $_POST["repassword"])
     {
       if(mysqli_query($c,$q)=="true")
       {
       echo " kiran ";
       header("Location:http://localhost/WT_PROJECT_3SEM_test/login/login.php");
     }
   }
   }
   else {
     echo ("reenter the password ");
   }
 }
 else {
   echo "please select a game";
 }
    ?>
</body>
</html>
