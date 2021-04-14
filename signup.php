<?php
/**
 * File
 *
 * Action file of the sign up modal form
 *
 * @Category Components
 * @package  WordPress
 * @author   Lucky Katana <luckykatana73@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://fashionfix.netlify.app
 * @since    1.0.0
 */

?>
<?php
	// DB Connection!
	require_once 'dbConnect.php';

	// Capture data!
if ( isset( $_POST['signup'] ) ) {
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
				$role ='3';
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

?>
		<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>