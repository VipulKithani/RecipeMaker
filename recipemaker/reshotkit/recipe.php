

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recipe form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

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
      <li><a href="logout.php">logout</a></li>
      <?php
	   session_start();
	  echo "<h3 style='color:red;'>Welcome ".$_SESSION['login_user']."</h3>";
	  ?>
    </ul>
  </div>
</nav>
<div class="container" style="padding-top:5%;">
  <h2 class="bg-warning text-white">Recipe form</h2>
  <p>Add New Recipe  to database by filling following form</p>
  <form method="post" action="#">
    <div class="form-group">
      <label for="inputdefault" style="font-size:20px;">Recipe-Id</label>
      <input class="form-control" name="id" type="text">
    </div>
    <div class="form-group">
      <label for="inputdefault" style="font-size:20px;">Recipe Name</label>
      <input class="form-control" name="name" type="text">
    </div>
	
	<div class="form-group">
     <label for="Ingredients" style="font-size:20px;">Ingredients</label>
      <textarea class="form-control" name="ingredients"></textarea>
    </div>
	
	 <div class="form-group">
      <label for="comment" style="font-size:20px;">Recipe</label>
      <textarea class="form-control" rows="5" name="recipe"></textarea>
    </div>
	
   <input type="submit" type="submit" class="btn btn-warning btn-rounded" name="submit">

  </form>
</div>

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
	//else 
		//echo "<h1><center>connected database successfully </center></h1>";
	if(isset($_POST['submit']))
	{
		
			
		$Id=$_POST['id'];
		$Name=$_POST['name'];
		$Recipe=$_POST['recipe'];
		$Ingredients=$_POST['ingredients'];
    
		$sql="insert into userrecipe values ('$Id','$Name','$Ingredients','$Recipe')";
		if ($conn->query($sql) === TRUE) {
				echo "<h1><center>Recipe entered successfully .THANKYOU </h1></center>";
			} 	
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	
?>


