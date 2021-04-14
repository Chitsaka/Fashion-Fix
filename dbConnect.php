<?php
/**
 * File
 *
 * Connection to the website database
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
define( 'DB_SERVER', 'localhost' );
define( 'DB_USERNAME', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_NAME', 'fashion_fix' );

$conn = mysqli_connect( DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME );

if ( $conn ) {
// echo ( 'connected successfully' );!
} else {
	echo ( 'failed to connect!' ) . mysqli_connect_error();
}
