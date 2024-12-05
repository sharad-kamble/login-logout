<?php
$conn = mysqli_connect( 'localhost', 'root', '', 'phpdatabase' );

if ( isset( $_POST[ 'login' ] ) ) {
    // Retrieve form data
    $user = mysqli_real_escape_string( $conn, $_POST[ 'user' ] );
    $pass = mysqli_real_escape_string( $conn, $_POST[ 'pass' ] );

    // Process login here ( e.g., validate user credentials )
    $sql = "SELECT username, password from register WHERE username='$user' AND password='$pass'";
    $check = mysqli_query( $conn, $sql );
    $result = mysqli_fetch_assoc( $check );
    $username = $result[ 'username' ];
    if ( mysqli_num_rows( $check )>0 )
 {
        session_start();
        $_SESSION[ 'user' ] = $username;
        header( 'location:welcome.php' );
    } else {
        header( 'location:login.php' );
    }
}
?>