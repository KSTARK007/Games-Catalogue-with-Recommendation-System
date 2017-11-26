<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>KSTARK</title>
  </head>
  <style media="screen">
  body
  {
    background-image: url("index.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    width: 100%;
  }
    input[type=submit]
    {
      margin-left:35%;
      margin-top: 200px;
      text-align: center;
      border: none;
      border-radius: 20px;
      padding: 40px;
      width: 30%;
    }
    input[type=submit]:hover
    {
      background-color: black;
      color: white;
    }
  </style>
  <body>
    <form class="" action="signup.php" method="post" target="_blank">
      <input type="submit" value="New user">
    </form>
    <form class="" action="login.php" method="post" target="_blank">
      <input type="submit" value="Login">
    </form>

</body>
</html>
