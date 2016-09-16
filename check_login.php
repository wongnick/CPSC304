<!DOCTYPE html>
<html>
<body>
    <?php

    	ini_set('display_errors', 'On');
        error_reporting(E_ALL | E_STRICT);

        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $conn = mysqli_connect("localhost", "root", "hotmail33");

        if(mysqli_connect_errno()) 
        {
            echo "failed to connect" . mysqli_connect_error();
        }

        mysqli_select_db($conn,"lostnfound");

        $searchUser = "select * from user where email='$email' and password='$pass'";

        $result=mysqli_query($conn, $searchUser);

    	// Mysql_num_row is counting table row
    	$count=mysqli_num_rows($result);

    	//check if that email is already registered
    	if($count==1){
            $row = mysqli_fetch_array($result);
    		$_SESSION['name'] = $row['name'];
            header('Location: homepage.php');
            exit;
    	}
    	else {
    		echo "wrong username or password";
    	}

        mysqli_close($conn);
    ?>
</body>
</html>