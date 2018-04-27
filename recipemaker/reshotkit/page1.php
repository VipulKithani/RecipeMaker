
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
/* The container */
.button {
    background-color: #2196F3; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.res{
	margin-top:-50%;
	margin-left:30%;
	width:50%;
	height:50%;
	
	padding:2%;
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
      <li><a href="logout.php">logout</a></li>
      <?php
	   session_start();
	  echo "<h3 style='color:red;'>Welcome ".$_SESSION['login_user']."</h3>";
	  ?>
    </ul>
  </div>
</nav>

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
    //Create the query
    
	$sql = "SELECT distinct ingredients FROM recipe";
	//$result = $conn->query($sql);

    //Run the query
    $query_resource = mysqli_query($conn,$sql);

    //Iterate over the results that you've gotten from the database (hopefully MySQL)
    //while( $recipe = mysqli_fetch_assoc($query_resource) ):
	if ($query_resource ->num_rows > 0) {
    // output data of each row
    while($row = $query_resource->fetch_assoc()) {
		$ingredient=explode(',',$row['ingredients']);
		$result = array_unique($ingredient);
		//print_r($result);
		
			foreach($result as $out){
				$abc[] = $out;
                ?>
				
			 
	
<?php
    }
	}
	}
	//print_r($abc);
	
?>
<form action="#" method="post">
<?php
$abc = array_unique($abc);
foreach ($abc as $stud) {

    echo "<br/>
	<label class='container'><input  type='checkbox' name=\"abc[]\" value='$stud' />$stud<span class='checkmark'></span></label><br>";
}?>
<input type="submit" class='button' name="submit" Value="Submit"/>

<!----- Including PHP Script ----->
<!--?php include 'checkbox_value.php';? -->
<div class="res">
<?php
if(isset($_POST['submit'])){
if(!empty($_POST['abc'])) {
// Counting number of checked checkboxes.
$checked_count = count($_POST['abc']);



//print_r($_POST['abc']);
$sql = "SELECT ingredients,name,procedures FROM recipe where";
//print($sql);
$_POST['abc'] = array_unique($_POST['abc']);
for($i=0;$i<sizeof($_POST['abc']);$i++)
{
	if($i<sizeof($_POST['abc'])-1)
	$sql =$sql." ingredients LIKE '%".$_POST['abc'][$i]."%' and";
	else
	$sql =$sql." ingredients LIKE '%".$_POST['abc'][$i]."%'";
}

//SELECT ingredients,name,procedures FROM recipe where ingredients LIKE '%C%' and ingredients LIKE '%W%'
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
		//echo "<h1><center>connected database successfully </center></h1>";
		
//$sql = "SELECT * FROM recipe where ingredients LIKE CONCAT('%', $arr, '%');";
//$rec = '%'.$check_msg.'%';
//$sq = "SELECT ingredients,name,procedures FROM recipe where ingredients LIKE '$rec'";
$resul = $conn->query($sql);
//print $resul;
if ($resul->num_rows > 0) {
    // output data of each row
	
	
	
    while($row = $resul->fetch_assoc()) {
               echo "<br><br>Name: " . $row['name']."<br><br>". " Ingredients: " . $row['ingredients']."<br><br>". " Procedure: " . $row['procedures'] ;
	//print_r($row);
			   
    }
} else {
    echo "0 results<br><br>or id";
}
}
}
?>
</div>