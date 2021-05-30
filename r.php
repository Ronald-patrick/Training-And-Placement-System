<?php
include("configuration/config.php");
?>
<?php

if(isset($POST['getOption']))
{
	
$query = "SELECT Name , Roll No , Branch FROM studentvalidate WHERE "; 
}