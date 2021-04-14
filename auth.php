<?php
if ( session_status() === PHP_SESSION_NONE ) {
	session_start();
}

if ( !isset( $_SESSION['FirstName'] ) ) {
	// Code!
} else {

	$firstname = $_SESSION['FirstName'];
	$lastname  = $_SESSION['LastName'];
	$user_id   = $_SESSION['unique_id'];

}
?>