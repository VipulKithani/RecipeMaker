<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "recipe");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM recipe WHERE name LIKE '%" . $term . "%'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
			echo "<table>
					<tr>
					<th>Id </th>
					<th>Name</th>
					<th>Ingredients</th>
					<th>Procedure</th>
					
					
					</tr>";
            while($row = mysqli_fetch_array($result)){
				echo"<tr>";
                echo "<td>&nbsp;" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['ingredients'] . "</td>";
				echo "<td>" . $row['procedures'] . "</td>";
				echo"</tr>";
            }
			echo"</table>";
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 
// close connection
mysqli_close($link);
?>