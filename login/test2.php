<html>
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <style>
    /* Full-width input fields */
    input[type=text],input[type=password],input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }


    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
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

    </style>
  </head>
  <body>
    <form action="signup.php" method="POST">
      <div class="container">

        <h1><b><span class="signup">Sign Up</b></h1>
          <br>
        <label><b style="font-size:30px;">Email</b></label>
        <input type="email" placeholder="dave@comp.com" name="email" required>
        <br><br><br>
        <label><b style="font-size:30px;">Username</b></label>
        <input type="text" placeholder="Username" name="id" required/>
        <br><br><br>
        <label><b style="font-size:30px;">Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <br><br><br>
        <label><b style="font-size:30px;">Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="repassword" required>
        <br>
      </div>



    <!--Division 1 -->
    <div>
      <div style="display:inline-block;width:100%;">
       <div class="check" style="display:inline-block;margin-left:21%;">
          <img style="border-radius:10px;" src = "../Games/data/pic/FIFA.JPG" width="300" height="250"  alt = "Image Over Here"  /></label>
           <span style="display:inline-block;font-size:25px;">FIFA 18</span><input type="checkbox" id="img1" name="game[]" value= "FIFA 18"/>
      </div>
      <div class="check" style="display:inline-block;margin-left:5%;">
           <img style="border-radius:10px;"src = "../Games/data/pic/FARCRY.JPG" width="300" height="250" alt = "Image Over Here" /></label>
           <span style="display:inline-block;font-size:25px;">FarCry 5</span><input value = "FARCRY 5" type="checkbox" id ="img2"  name="game[]" />
      </div>
    </div>
    <!--Division 2 -->
    <div style="display:inline-block;width:100%;margin-top:2.5%;">
       <div class="check" style="display:inline-block;margin-left:21%;">
           <img style="border-radius:10px;" src = "../Games/data/pic/INJUSTICE2.JPG" width="300" height="250"  alt = "Image Over Here" title = "Click to Select" /></label>
           <span style="display:inline-block;font-size:25px;">Injustice 2</span><input type="checkbox" id="img3" name="game[]" value= "INJUSTICE 2"/>
      </div>
      <div class="check" style="display:inline-block;margin-left:5%;">
           <img style="border-radius:10px;"src = "../Games/data/pic/Assassin's Creed Origins.JPG" width="300" height="250"  alt = "Image Over Here" title = "Click to Select"/></label>
           <span style="display:inline-block;font-size:25px;">Assassin's creed origins</span></span><input value = "Assassin's Creed Origins" type="checkbox" id ="img4"  name="game[]" />
      </div>
    </div>

    <div style="display:inline-block;width:100%;margin-top:2.5%;">
       <div class="check" style="display:inline-block;margin-left:21%;">
           <img  style="border-radius:10px;"src = "../Games/data/pic/DarkSides3.JPG" width="300" height="250" alt = "Image Over Here" title = "Click to Select" /></label>
           <span style="display:inline-block;font-size:25px;">Darksiders 3</span><input type="checkbox" id="img5" name="game[]" value= "DarkSides3"/>
      </div>
      <div class="check" style="display:inline-block;margin-left:2%;">
           <img style="border-radius:10px;"src = "../Games/data/pic/Forza.JPG" width="300" height="250" alt = "Image Over Here" title = "Click to Select"/></label>
           <span style="display:inline-block;font-size:25px;">Forza</span><input value = "FORZA 2017" type="checkbox" id ="img6"  name="game[]" />
      </div>
    </div>

    <div class="check" style="margin-left:40%;margin-top:2.5%;">
      <img style="border-radius:10px;"src = "../Games/data/pic/NFS payback.JPG" width="290" height="250"  alt = "Image Over Here" title = "Click to Select"/></label>
      <span style="display:inline-block;font-size:25px;">NFS Payback</span><input type="checkbox" value = "NFS Payback" id="img7" name="game[]" />
    </div>

    </div>
    <!-- Single Image-->



    <div class="clearfix">
    <for>
      <button type="submit" class="signupbtn" style="margin-left:43%;">Sign Up</button>

    </div>
    </form>


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
       header("Location :http://localhost/WT_PROJECT_3SEM_test/login/login.php");
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
