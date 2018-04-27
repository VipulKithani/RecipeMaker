<!DOCTYPE html>
<html lang="en">
<head>

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#FF5233;">

<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RecipeMaker</a>
    </div>
    <ul class="nav navbar-nav navbar-center"  >
      <li><a href="HotkitRes.php" >Home</a></li>
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
 
<div class="container">
 
  <div id="karan" class="example1" style="padding-top:90px;">
   <h3> Search your favourite recipes according to ingredients available in your house on Recipe Maker</h3>
			<div class="w3-content w3-section" >
		<img class="mySlides" src="res.jpg" style="width:100%;height:530px;">
		<img class="mySlides" src="food.jpg" style="width:100%;height:530px;">
		<img class="mySlides" src="food2.jpg" style="width:100%;height:530px;">
		
		</div>

			<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 2000); // Change image every 2 seconds
			}
			</script>
		
			
		</div>	
	

</div>

</body>
</html>
