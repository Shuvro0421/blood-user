<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
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
  <p>Register as Nurse</p>
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
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $num    = stripslashes($_REQUEST['num']);
        $num    = mysqli_real_escape_string($con, $num);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users2` (username, password, num)
                     VALUES ('$username', '" . md5($password) . "', '$num')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login2.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration2.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Nurse Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="tel" class="login-input" name="num" placeholder="Phone Number" required />
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login2.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
<?php include 'footer.php';?>
</html>
