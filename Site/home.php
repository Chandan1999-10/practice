<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	if ($_SESSION['usertype']==1){
		echo "Hey";
	}
	else{
		
	}
   }
else {
    echo "not logged in";
}
?>