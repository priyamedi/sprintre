<?php
	$link = mysqli_connect("localhost", "devdb_sprint", "superherogram9@", "sprint");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
   // $sql = "SELECT * FROM doctors WHERE name LIKE ?";
    $sql = "SELECT * FROM seo WHERE title LIKE ? LIMIT 10";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term ='%'.$_REQUEST["term"].'%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                  echo "<div style='border:1px solid white'><a href=" . $row["url"] ." style='text-decoration:none;color:white !important;font-size:12px;padding:0px 3px;'><font color='white'>&nbsp;" . $row["title"]."</font></a> </div>";
					
                }
            } else{
				 echo "<div style='border:1px solid white'><a  href='https://www.sprintdiagnostics.in/book-appointment' style='text-decoration:none;color:white !important;font-size:12px;padding:0px 3px;'> Book A Test</a> </div>";
                
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>