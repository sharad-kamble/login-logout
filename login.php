<?php
session_start();
if ( isset( $_SESSION[ 'user' ] ) ) {
    header( 'location:welcome.php' );
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
</head>

<body>
    <section class='container-fluid py-5'>
        <div class='container'>
            <div class='row justify-content-center'>
                <div class='col-lg-4'>
                    <h2 class='text-center mb-3'>Please Login</h2>
                    <form action='login-process.php' method='post'>
                        <div class='form-floating mb-3'>
                            <input type='text' name='user' class='form-control' placeholder='name@example.com'>
                            <label>Username</label>
                        </div>
                        <div class='form-floating mb-3'>
                            <input type='password' class='form-control' name='pass' placeholder='Password'>
                            <label>Password</label>
                        </div>
                        <button type='submit' name='login' class='btn btn-outline-success col-lg-12 '>Submit</button>
                    </form>

                </div>

            </div>
        </div>

    </section>
</body>

</html>