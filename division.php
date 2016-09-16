<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UBC Lost & Found</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Custom JS -->
    <link href="js/shop-homepage.js" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="#">UBC Lost & Found</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form method="post" action="join.php">
                                <input type="submit" name="profile" class="btn btn-primary" value="Join">
                            </form>
                        </li>
                        <li>
                            <form method="post" action="division.php">
                                <input type="submit" name="division" class="btn btn-primary" value="Division">
                            </form>
                        </li>
                        <li>
                            <form method="post" action="aggregation.php">
                                <input type="submit" name="aggregation" class="btn btn-primary" value="Aggregation">
                            </form>
                        </li>
                        <li>
                            <form method="post" action="nested_aggregation.php">
                                <input type="submit" name="nestedAggregation" class="btn btn-primary" value="Nested Aggregation">
                            </form>
                        </li>
                        <li>
                            <form method="post" action="profile.php">
                                <input type="submit" name="profile" class="btn btn-primary" value="Update">
                            </form>
                        </li>
                        <li>
                            <form method="post" action="delete.php">
                                <input type="submit" name="delete" class="btn btn-primary" value="Delete">
                            </form>
                        </li>
                        <li>
                            <form method="post" action="right_join.php">
                                <input type="submit" name="rightJoin" class="btn btn-primary" value="Right Join">
                            </form>
                        </li>
                        <li>
                            <form method="post" action="inner_join.php">
                                <input type="submit" name="innerJoin" class="btn btn-primary" value="Inner Join">
                            </form>
                        </li>
                        <li>
                            <form method="post" action="left_join.php">
                                <input type="submit" name="leftJoin" class="btn btn-primary" value="Left Join">
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!--all users-->
        <div class="row">

            <div class="col-sm-4 col-lg-4 col-md-4">
                <?php
                ini_set('display_errors', 'On');
                error_reporting(E_ALL | E_STRICT);

                $conn = mysqli_connect("localhost", "root", "hotmail33");

                if(mysqli_connect_errno()) 
                {
                    echo "failed to connect" . mysqli_connect_error();
                }

                mysqli_select_db($conn,"lostnfound");
                $sql = "select email from (select user.email, count(distinct user.email , item.type) as count from user, found, item where found.email = user.email and found.item_id = item.id group by user.email) as type_count where type_count.count = (select count(*) from itemtype);";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result))
                {
                    echo "<div class=\"thumbnail\">";
                    echo "<div class=\"caption\">";
                    echo "<p>Description: " .$row['email']. "</p>";
                    echo "</div>";
                    echo "</div>";
                }
                mysqli_close($conn);
                ?>

            </div>

        </div>
    </div>
</div>

</div>

</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
