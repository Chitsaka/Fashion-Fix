<?php
require 'dbConnect.php';

			$id = $_GET['id'];        // Collecting data from query string
		if( !is_numeric($id) ){ // Checking data if it is a number or not
			echo $conn->error;
			echo "Data Error";
			exit;
}
include ("auth.php");
if (isset($user_id)){

$sql = 'INSERT INTO checkout ( unique_id, post_id, status ) VALUES ( ?, ?,?)';
        $status = 0;
				// prepare!
			if ( $stmt = mysqli_prepare( $conn, $sql ) ) {
					// Bind!
					mysqli_stmt_bind_param( $stmt, 'iis', $param_uniqueid, $param_postid, $param_status );
                    $param_status = $status;
					$param_uniqueid = $user_id;
					$param_postid    = $id;


					// execute!
				if ( mysqli_stmt_execute( $stmt ) ) {

						header( 'location:shopcart.php' );
				} else {
						// code...
						echo  mysqli_error( $conn );
				}
			} else {
					// code...
					echo 'error in the query' . mysqli_error( $conn );
			}
        }else{
            echo "login to add to cart";
        }

?>