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
		echo "<h1><center>connected database successfully </center></h1>";
		
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