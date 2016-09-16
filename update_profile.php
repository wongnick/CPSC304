<!DOCTYPE html>
<html>
<body>
    <?php

    	ini_set('display_errors', 'On');
        error_reporting(E_ALL | E_STRICT);

        $email = $_POST["email"];
        $name = $_POST["name"];

        $conn = mysqli_connect("localhost", "root", "hotmail33");

        if(mysqli_connect_errno()) 
        {
            echo "failed to connect" . mysqli_connect_error();
        }

        mysqli_select_db($conn,"lostnfound");

        $updateProfile = "update user set name='$name' where email='$email';";

        $result=mysqli_query($conn, $updateProfile);

        header('Location: profile.php');

        mysqli_close($conn);
    ?>
</body>
</html>