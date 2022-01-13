<!DOCTYPE html>
<?php
      session_start();




 if (isset($_POST['submit'])){
   $mail = $_POST['uname'];
   $pass = $_POST['psw'];
    $userdata= $_SESSION["user"];
    foreach($userdata as $user){
      if($user['email']== $mail && $user['password']== $pass){
        $_SESSION ['userlogin']= [$mail];
        header('Location:http://localhost/test/landing.php');
      }
      else 
      echo "yyyyyy";
    }

if(!empty($user) && !empty ($pass) ){
  if($user=="toqa" && $pass =="12345678"){
    echo("user name and password matched");
  }else{
    echo ('error!');
  }
}else {
  echo "enter your name and pass";
}
}

?>


<html>
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
  </head>
  <body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <h1>Login Form</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Email</strong></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </div>
      <button type="submit" name='submit'>Login</button>
      
    </form>
  </body>
</html>
<?php

// echo "<br>";
  // var_dump($_SESSION["user"]);


?>