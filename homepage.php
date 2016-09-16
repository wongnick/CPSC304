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
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">UBC Lost & Found</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form method="post" action="profile.php">
                                <input type="submit" name="profile" class="btn btn-primary" value="Profile">
                            </form>
                        </li>
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
                            <form method="post" action="search.php">
                                <input type="text" class="form-control" name="description" placeholder="Search for an item">
                                <input type="submit" name="search" class="btn btn-primary" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="modal-dialog">
                <div class="createmodal-container">
                    <h1>Post a Listing</h1><br>
                    <form>
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="description" placeholder="Description">
                        <input type="text" name="location" placeholder="Location">
                        <input type="text" name="type" placeholder="Type">
                        <input type="text" name="date" placeholder="Date">
                        <input type="submit" name="create" class="create createmodal-submit" value="Post">
                    </form>
                </div>
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
