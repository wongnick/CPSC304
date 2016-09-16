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

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">UBC Lost & Found</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a style="cursor: pointer" data-toggle="modal" data-target="#post-modal">Post</a></li>
                        <li><a style="cursor: pointer" data-toggle="modal" data-target="#login-modal">Login</a></li>
                        <li><a style="cursor: pointer" data-toggle="modal" data-target="#register-modal">Register</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="row">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group" id="adv-search">
                                <form method="post" action="search.php">
                                    <input type="text" class="form-control" name="description" placeholder="Search for an item">
                                    <input type="submit" name="search" class="btn btn-primary" value="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">

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
                            $description = $_POST['description'];
                            $sql = "select * from item where description LIKE '%" .$description. "%';";
                            echo $sql;
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<div class=\"thumbnail\">";
                                echo "<div class=\"caption\">";
                                echo "<h4 class=\"pull-right\"></h4>";
                                echo "<p>" .$row['description']. "</p>";
                                echo "</div>";
                                echo "<div class=\"ratings\">";
                                echo "<p class=\"pull-right\">".$row['type']."</p>";
                                echo "<span>" .$row['date']. "</span>";
                                echo "</div>";
                                echo "</div>";
                            }

                            mysqli_close($conn);
                            ?>
                            <div class="thumbnail">

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /.container -->

            <div class="container">

                <hr>

                <!-- Footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; Troll</p>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.container -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script> 

        </body>

        </html>
