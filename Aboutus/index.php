
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="main.css">
    <meta charset="utf-8">
    <title>ABOUT US </title>
  </head>
  <body>
    <div class="absolute">
      <ul>
        <li class="active radius"><a href="../index.html" target="_blank">HOME</a></li>
        <li><a href="../Games/index.php" target="_blank">GAMES</a></li>
        <li><a href="../tools/tools.html" target="_blank">TOOLS</a></li>
        <li class="float_right active"><a href="../login/index.php"><span id ="user">SIGN UP</span></a></li>
        <li><a href="#" target="_blank">ABOUT US</a></li>
      </ul>
  </div>
    <div class="heading">
        ABOUT US
    </div>
    <br><br>



<div class="motto" >
  <h2> EAT </h2>
    <h2 > SLEEP</h2>
      <h2 > GAME </h2>
        <h2 > REPEAT  </h2>
        <h3> This is our daily routine and this website is the only productive thing we have ever done! </h3>
</div>
<br>
<div class="ready">
      <h1><span class="c">READY TO SPAWN YOURSELF YET?</span></h1>
</div>
<br>
<div class="welcome">
  <p> Welcome my fellow gamers! If you are a hardcore gamer o.O? well...you are in the right place. Glad we found you! Welcome to the family Mate. Let us follow the Mass.</p>
  <p> Our Website is entirely dedicated to Gamers. Others beware! you might turn into a hardcore one.
      Ok Lets get to the basics, this is a Game Catalog, its your call!</p>
  <p> Instructions: All you need to do is  select a game of your choice - Extract the file- and then its<b> GAME TIME</b>. Beat the Boss and be the hero you are.
      No more DRM! This is the place where your avatars can RIP. You can call it heaven if you want.
              Thats about us, now let us know about you by clicking on <b>SIGN UP</b> Why are you still Lagging? <b> Hurry Up!!</b></p>


</div>


<div class="intro">
      <h1 class="center">DEVELOPERS</h1>
          <div class="dev1">
            <img class="devImgL" src="images.jpg" alt="">
            <span class="devPR">KIRAN S HOMBAL</span>
          </div>
      <br>
          <div class="dev2">
            <span class="devPL">K Sai Jaydeep</span>
            <img class="devImgR" src="images.jpg" alt="">
          </div>
      <br>
          <div class="dev3">
            <img class="devImgL" src="images.jpg" alt="">
            <span class="devPR">Keerthana T K</span>
          </div>
    <div class="feedback">
    <span class="h1center"><h1>FEEDBACK Please</h1></span>
          <div class="formPart">
              <form  action="index.php" method="post">
                <span class="formText">Enter your name:</span><input type="text" required placeholder="NAME" name="name">
                <br><br>
                <span class="formText">Enter your number:</span><input type="number" required placeholder="987765787" name="phno">
                <br><br>
                <span class="formText">Enter your email:</span><input type="email" required placeholder="someone@something.com" name="email">
                <br><br><br>
                  <span class="formText2">Enter your feedback</span><br><br><textarea  name="text" required rows="8" cols="100" placeholder="We know you liked it XD"></textarea>
                  <br><br><br>
                <input type="submit" name="" value="SUBMIT">
              </form>
          </div>
      </div>
  </div>


<br>


<?php
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
 // $query = "CREATE TABLE feedbackDB (ID INT(30) PRIMARY KEY AUTO_INCREMENT ,name VARCHAR(30) NOT NULL ,phno VARCHAR(13),email VARCHAR(30),feedback VARCHAR(40))";
 // var_dump(mysqli_query($c,$query));

   $q = "INSERT INTO feedbackDB (Name,phno,email,feedback) values ('$_POST[name]','$_POST[phno]','$_POST[email]','$_POST[text]')";
   var_dump(mysqli_query($c,$q));

}


 ?>


 </body>
</html>
