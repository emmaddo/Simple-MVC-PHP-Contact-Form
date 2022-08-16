<?php
session_start();
//include config file
require_once ('helpers/db_config.php');

// Attempt select query execution
$sql = "SELECT * FROM contacts";
$contacts=false;
$qry=mysqli_query($conn, $sql);
if($qry && mysqli_num_rows($qry)>0){
$contacts=true;
mysqli_close($conn); //Close db connection
 }
require 'views/index.view.php'; //Load the view file 
//Mr. Emmanuel, this is the most elementary method I could think for using procedural. Try follow up and understand and subsequetnly I will be refactoring to making it more standard in different stages
?>
 

