

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

  
  
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 6px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #FF8A33;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RecipeMaker</a>
    </div>
    <ul class="nav navbar-nav navbar-center"  >
      <li><a href="HotkitRes.php">Home</a></li>
      <li><a href="page1.php">Ingredients</a></li>
      <li><a href="recipe.php">Add Recipe</a></li>
	  <li><a href="search-form.php">search dishes</a></li>
	  <li><a href="about1.html">About</a></li>
      
    </ul>
	<ul class="nav navbar-nav navbar-right"  >
      <li><a href="signup.php">signup</a></li>
      <li><a href="login.php">login</a></li>
      
    </ul>
  </div>
</nav>
<h2>Login Form</h2>

<form action="#" method="post">

  <div class="container">
    <h1 style="text-align:center;">Login </h1>
    <label for="Email"></label>
    <input type="text" id="email" name="Email" placeholder="Email" required>


    <label for="lname"></label>
    <input type="Password" id="lpassword" name="lpassword" placeholder="Password" required>
<button type="submit" name="login">Login</button>
   

  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw"> <a href="signup.php">Don't Have Account?</a></span>
  </div>
</form>

</body>
</html>


<?php
	$servername="LocalHost";
	$username="root";
	$password="";
	$dbname="recipe";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	else 
		echo "<h1><center>connected database successfully </center></h1>";
	
	if(isset($_POST['login']))
	{
		session_start();
;
		$Email=$_POST['Email'];
		$password=$_POST['lpassword'];
		$_SESSION['login_user']=$Email;
$sql = "SELECT * FROM Hotkit where Email='$Email' and Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<script language='javascript' type='text/javascript'> location.href='HotkitRes.php' </script>"; 
                echo "<br><br>id: " . $row["Email"]."<br><br>". " Name: " . $row["Name"] ;

    }
} else {
   echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>"; 	
}
	}
	$conn->close();


	?>
