<?php
include ('dbConnect.php');
if ( isset($_POST['submit']) ) {
    // Code!
    		// Code...
		$unique_id = rand( time(), 100000000 );
		$firstname = stripslashes( $_POST['FirstName'] );
		$firstname = mysqli_real_escape_string( $conn, $firstname );
		$lastname  = stripslashes( $_POST['LastName'] );
		$lastname  = mysqli_real_escape_string( $conn, $lastname );
		$email     = stripslashes( $_POST['email'] );
		$email     = mysqli_real_escape_string( $conn, $email );
		$phonenum     = stripslashes( $_POST['phonenumber'] );
		$phonenum    = mysqli_real_escape_string( $conn, $phonenum );
        $idno     = stripslashes( $_POST['idno'] );
		$idno    = mysqli_real_escape_string( $conn, $idno );
        $companyname     = stripslashes( $_POST['company_name'] );
		$companyname    = mysqli_real_escape_string( $conn, $companyname );
        $bankaccname     = stripslashes( $_POST['bank_account_name'] );
		$bankaccname   = mysqli_real_escape_string( $conn, $bankaccname );
        $bankaccno     = stripslashes( $_POST['bank_account_number'] );
		$bankaccno   = mysqli_real_escape_string( $conn, $bankaccno );
        $bankname     = stripslashes( $_POST['bank_name'] );
		$bankname  = mysqli_real_escape_string( $conn, $bankname );
        $bankbranch     = stripslashes( $_POST['bank_branch_name'] );
		$bankbranch  = mysqli_real_escape_string( $conn, $bankbranch );
        $storename     = stripslashes( $_POST['store_name'] );
		$storename  = mysqli_real_escape_string( $conn, $storename);
		$password     = $_POST['password'];

			$hashedpassword = password_hash( $password, PASSWORD_DEFAULT );

					$sql  = 'SELECT * FROM customer_info WHERE email = ?';
					$stmt = mysqli_stmt_init( $conn );

		// Prepare the prepared statement!
	if ( !mysqli_stmt_prepare( $stmt, $sql ) ) {

		echo  mysqli_error( $conn );
	} else {
			// bind the parameters to the placeholder!
			mysqli_stmt_bind_param( $stmt, 's', $email );

			// run parameters inside database!
			mysqli_stmt_execute( $stmt );
			$results = mysqli_stmt_get_result( $stmt );
			$rows    = mysqli_num_rows( $results );


		if ( $rows > 0 ) {
				echo 'email is already taken';
		} else {
				$role ='2';
				// Sql query!
				$sql = 'INSERT INTO customer_info ( unique_id, FirstName, LastName, role, email, PhoneNumber, password ) VALUES ( ?, ?, ?, ?, ?, ?, ? )';

				// prepare!
			if ( $stmt = mysqli_prepare( $conn, $sql ) ) {
					// Bind!
					mysqli_stmt_bind_param( $stmt, 'issssss', $param_uniqueid, $param_fname, $param_lname, $param_role, $param_email, $param_phonenum, $param_password );
					$param_uniqueid = $unique_id;
					$param_fname    = $firstname;
					$param_lname    = $lastname;
					$param_role     = $role;
					$param_email    = $email;
					$param_phonenum = $phonenum;
					$param_password = $hashedpassword;

					// execute!
				if ( mysqli_stmt_execute( $stmt ) ) {
                    // Sql query!
                    //insert the rest of the information to seller's table
				$query = 'INSERT INTO seller_info ( unique_id, idno, companyname, bankaccname, bankaccno, bankname, bankbranch, storename ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)';

				// prepare!
			if ( $stmt = mysqli_prepare( $conn, $query ) ) {
					// Bind!
					mysqli_stmt_bind_param( $stmt, 'isssssss', $param_uniqueid, $param_idno, $param_companyname, $param_bankaccname, $param_bankaccno, $param_bankname, $param_bankbranch, $param_storename );
					$param_uniqueid = $unique_id;
					$param_idno    = $idno;
					$param_companyname    = $companyname;
					$param_bankaccname    = $bankaccname;
					$param_bankaccno      = $bankaccno;
					$param_bankname       = $bankname;
					$param_bankbranch     = $bankbranch;
					$param_storename     = $storename;

					// execute!
				if ( mysqli_stmt_execute( $stmt ) ) {

				} else {
						// code...
						echo  mysqli_error( $conn );
				}
			} else {
					// code...
					echo 'error in the query' . mysqli_error( $conn );
			}

            //end of second insert

						header( 'location:index.php' );
				} else {
						// code...
						echo  mysqli_error( $conn );
				}
			} else {
					// code...
					echo 'error in the query' . mysqli_error( $conn );
			}
		}
	}

}
