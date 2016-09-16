<!DOCTYPE html>
<html>
<body>
    <?php
    	ini_set('display_errors', 'On');
        error_reporting(E_ALL | E_STRICT);

        $delete = $_POST['itemtype'];

        $conn = mysqli_connect("localhost", "root", "hotmail33");

        if(mysqli_connect_errno()) 
        {
            echo "failed to connect" . mysqli_connect_error();
        }

        mysqli_select_db($conn,"lostnfound");

        $cascadeDelete = "delete from itemtype where type='$delete'";

        $result=mysqli_query($conn, $cascadeDelete);
        header('Location: delete.php');
        exit;
        mysqli_close($conn);
    ?>
</body>
</html>