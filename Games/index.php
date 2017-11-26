<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="main.css">
  <title>KSTARK</title>
</head>
<body>
  <div class="absolute">
      <ul>
        <li class="active radius"><a href="../index.html">HOME</a></li>
        <li><a href="../Games/index.php" target="_blank">GAMES</a></li>
        <li><a href="../tools/tools.html" target="_blank">TOOLS</a></li>
        <li class="float_right active"><a href="../login/index.php"><span id ="user">SIGN UP</span></a></li>
        <li><a href="../Aboutus/index.php" target="_blank">ABOUT US</a></li>
      </ul>
  </div>
<?php
if(isset($_SESSION["name"]))
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$c = mysqli_connect($servername,$username,$password,$dbname);
if($_SESSION["game"]=="N")
  {
    echo "Please select a Game ";
  }


      $GamesList = array("FIFA","FARCRY","INJUSTICE2","Assassin's Creed Origins","DarkSides3","Forza","NFS payback");
      $GamesRating = array("FIFA" =>5 ,"FARCRY"=>3,"INJUSTICE2"=>3.5,"Assassin's Creed Origins"=>4.5,"DarkSides3"=>2.5,"Forza" => 2 ,"NFS payback"=>4);
      $UsersList = array();
      $q = "SELECT * FROM userdb";
      $c = mysqli_connect("localhost","root","","project");
      $res = mysqli_query($c,$q);
      while(($val = mysqli_fetch_assoc($res))!=NULL)
      {
        $a = array("name" =>"$val[name]",$val["FIFA"],$val["FARCRY"],$val["INJUSTICE"],$val["AC"],$val["DS"],$val["Forza"],$val["NFS"] );
        array_push($UsersList,$a);
      }
  $votes = array(0,0,0,0,0,0,0);
  $user = array("name"=>$_SESSION["name"],"gamePlayed"=>$_SESSION["game"],"Friends" => array());

  // for($i = 0 ; $i<count($UsersList);$i++)
  // {
  //    echo $UsersList[$i]["name"]." Likes  ";
  //    for($j = 0; $j<count($GamesList);$j++)
  //       {
  //         if($UsersList[$i][$j] == 1)
  //           echo "<b>" . $GamesList[$j] . "</b>  and    ";
  //       }
  //     echo "<br>";
  // }

$gameposition = 0 ;
for ($i=0; $i <count($GamesList) ; $i++)
{
  if($GamesList[$i] == $_SESSION["game"])
    {
      $gameposition = $i;
    }
}
echo "<br>";
$friends = array();
foreach ($UsersList as $value)
{
  if($value[$gameposition] == 1)
    array_push($friends,$value);
}

foreach ($friends as  $value)
{
  for ($i=0; $i <7 ; $i++)
  {
    if($i == $gameposition)
      continue;
    if($value[$i] == 1)
      $votes[$i]++;
  }
}
var_dump($votes);

$position = array();
$largest = 0;
for($i = 0; $i<count($votes); $i++)
{
  if($votes[$i]>=$largest)
  {
    $largest = $votes[$i];
  }

}
for($i = 0; $i<count($votes); $i++)
{
  if($votes[$i]==$largest and $largest !=0)
  {
    array_push($position, $i);
  }
}
if($_SESSION["game"]!="N")
{
echo "<br><br><br><br><br><br><br><br>";
echo "<br>";
echo "<h3>the game you liked is $_SESSION[game] </h3>";
echo "<h1> The following recomendations are based on other users data</h1> ";
}
for($i = 0;$i<count($position);$i++)
{
$recommended_games[$i] = $GamesList[$position[$i]];
echo "<script type=\"text/javascript\">
var rGameMainDiv = document.createElement(\"div\");
rGameMainDiv.setAttribute(\"id\",\"rGameMainDiv\");
var rGameImg = document.createElement(\"img\");
var rGameLink = document.createElement(\"a\");
rGameLink.setAttribute(\"target\",\"_blank\");
rGameLink.setAttribute(\"href\",\"$recommended_games[$i]/index.html\");
rGameImg.setAttribute(\"src\",\"data/pic/$recommended_games[$i].JPG\");
rGameImg.setAttribute(\"style\",\"left:400px;width:600px;height: 400px;\");
var rGameName = document.createElement(\"h3\");
rGameName.innerHTML = \" the game you might like $recommended_games[$i]\";
document.body.appendChild(rGameMainDiv);
rGameMainDiv.appendChild(rGameName);
rGameMainDiv.appendChild(rGameLink);
rGameLink.appendChild(rGameImg);
</script>
";
}
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<h1> The following recomendations are based on 4.0 and above rated game</h1> ";
arsort($GamesRating);
foreach ($GamesRating as $key => $value)
{
  if($value >= 4.0)
  {   echo "<script type=\"text/javascript\">
      var rGameMainDiv = document.createElement(\"div\");
      rGameMainDiv.setAttribute(\"id\",\"rGameMainDiv\");
      var rGameImg = document.createElement(\"img\");
      var rGameLink = document.createElement(\"a\");
      rGameLink.setAttribute(\"href\",\"$key/index.html\");
      rGameLink.setAttribute(\"target\",\"_blank\");
      rGameImg.setAttribute(\"src\",\"data/pic/$key.JPG\");
      rGameImg.setAttribute(\"style\",\"left:400px;width:600px;height: 400px;\");
      var rGameName = document.createElement(\"h3\");
      rGameName.innerHTML = \"the game you might LIKE $key with the rating of $value\";
      document.body.appendChild(rGameMainDiv);
      rGameMainDiv.appendChild(rGameName);
      rGameMainDiv.appendChild(rGameLink);
      rGameLink.appendChild(rGameImg);
      </script>
      ";
    }
}
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<h1>ALL THE GAMES WE HAVE in the order of rating </h1> ";
foreach ($GamesRating as $key => $value)
{
  echo "<script type=\"text/javascript\">
      var rGameMainDiv = document.createElement(\"div\");
      rGameMainDiv.setAttribute(\"id\",\"rGameMainDiv\");
      var rGameImg = document.createElement(\"img\");
      var rGameLink = document.createElement(\"a\");
      rGameLink.setAttribute(\"href\",\"$key/index.html\");
      rGameLink.setAttribute(\"target\",\"_blank\");
      rGameImg.setAttribute(\"src\",\"data/pic/$key.JPG\");
      rGameImg.setAttribute(\"style\",\"left:400px;width:600px;height: 400px;\");
      var rGameName = document.createElement(\"h3\");
      rGameName.innerHTML = \"the game you might LIKE $key with the rating of $value\";
      document.body.appendChild(rGameMainDiv);
      rGameMainDiv.appendChild(rGameName);
      rGameMainDiv.appendChild(rGameLink);
      rGameLink.appendChild(rGameImg);
      </script>
      ";
}

echo "<script type=\"text/javascript\">document.querySelector(\"#user\").innerHTML = \"$_SESSION[name]\"</script>";
}
 ?>
</body>
</html>
