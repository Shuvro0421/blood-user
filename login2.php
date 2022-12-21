<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.header {
  padding: 30px;
  text-align: center;
  background: #673AB7;
  color: white;
  font-size: 30px;
}
</style>
</head>

<div class="header" style="background: crimson">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <h1 style="font-family: 'Pacifico', cursive">Welcome to Blood Management</h1>
  <p>Login as Nurse</p>
</div>

<body>

<div class="topnav">
  <a href="login.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Login as Staff&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
  <a href="registration.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Register as Staff&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
  <a href="login2.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Login as Nurse&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
  <a href="registration2.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Register as Nurse&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
</div>

    <style>
        body{
            background: white;
        }
    </style>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users2` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard2.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login2.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Nurse Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration2.php">Registration Now</a></p>
  </form>
<?php
    }
?>
</body>
<?php include 'footer.php';?>
</html>
