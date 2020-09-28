<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	echo "Hey";
   }
else {
    echo "not logged in";
}
?>