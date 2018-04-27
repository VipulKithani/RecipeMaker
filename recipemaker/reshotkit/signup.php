
<!DOCTYPE html>
<html>
<head>
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #FF8A33;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: left;
  width: 100%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
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
</style>
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
<form action="#" method="post" style="border:1px solid #ccc">
  <div class="container" style="padding-top:5%;text-align:center;">
    <h1>Sign Up</h1>
    
    <hr>
 <label for="fname"></label>
    <input type="text" id="fname" name="Name" placeholder="Name">

    <label for="lname"></label>
    <input type="text" id="email" name="Email" placeholder="Email">

  

    <label for="lname"></label>
    <input type="Password" id="password" name="Password" placeholder="Password">

	 <label for="lname"></label>
    <input type="Password" id="lname" name="CPassword" placeholder="Confirm Password">
	
    

    <p>Already have an Account <a href="login.php" style="color:dodgerblue">Click Here</a>.</p>

    <div class="clearfix">
      
      <button type="submit" class="signupbtn" name="signup">Sign Up</button>
    </div>
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
	if(isset($_POST['signup']))
	{
		$name1=$_POST['Name'];
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
		$CPassword=$_POST['CPassword'];
		
		$sql="insert into hotkit values ('$name1','$Email','$Password','$CPassword')";
		if ($conn->query($sql) === TRUE) {
				echo "<h1><center>You have successfully registered. THANKYOU </h1></center>";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	
	$conn->close();


	?>

