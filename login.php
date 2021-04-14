<?php
/**
 * File
 *
 * Action page of the log in modal form
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
// Connection!
include 'dbConnect.php';

if ( isset( $_POST['login'] ) ) {
		// Code!
		$email    = $_POST['email'];
		$password = $_POST['password'];

		$sql = 'SELECT * FROM customer_info WHERE email = ?';

		// prepare!
		if ( $stmt = mysqli_prepare( $conn, $sql ) ) {
			// code...
			// bind!
			mysqli_stmt_bind_param( $stmt, 's', $param_email );
			$param_email = $email;

			// execute!
			mysqli_execute( $stmt );

			// fetch results!
			$results = mysqli_stmt_get_result( $stmt );


			if ($results) {
				// code....
				$rows = mysqli_num_rows($results);

				if ($rows > 0) {
					// code....
					$records = mysqli_fetch_assoc($results);
					$passwordhashed = $records['password'];
					$passwordstatus = password_verify( $password, $passwordhashed);


					if ($passwordstatus ) {
						// code....
						echo 'Welcome '. $records['FirstName'] . $records['LastName'];
						$firstname = $records['FirstName'];
						$lastname  = $records['LastName'];
						$user_id   = $records['unique_id'];


						// Start session!
						session_start();

						// Create session!
						$_SESSION['FirstName'] = $firstname;
						$_SESSION['LastName'] = $lastname;
						$_SESSION['unique_id'] = $user_id;

						header('location:index.php');
					} else {
						// code....
					echo 'invalid password';
					}
				}else {
					// code....
					echo 'invalid email or password';
				}
			}
			else {
				// code...
				echo 'something wrong with  the results';
			}
		}
		else {
			// code...
			echo 'something went wrong'.mysqli_error( $conn );
	}
}


?>