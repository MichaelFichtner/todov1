<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ToDo v1</title>

    <!-- Bootstrap Core CSS -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
    </style>

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
            <a class="navbar-brand" href="#">ToDo v1</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
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
        <div class="col-lg-12 text-center">
            <h1>ToDo List v1-dennis</h1>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ToDo</th>
                    <th>Datum</th>
                    <th>Erledigt</th>
                </tr>
                </thead>
                <tbody>
                <form action="index.php" method="post">
                <?php
                    for ($i = 0; $i < count($daten); $i++)
                    {
                        $num = $i+1;
                        echo "<tr></tr><th scope='row'>". $num ."</th>";
                        echo "<td>".$daten[$i][1]."</td>";
                        echo "<td>".$daten[$i][2]."</td>";
                        echo "<td><input type='checkbox' value='".$daten[$i][0]."' name='id[]'></td></tr>";
                    }
                ?>
                <tr>
                    <th scope="row">#</th>
                    <td><input type="text" value="<?php if (!$result){ echo (\todo\ErrorController::getDaten()[0] == 2) ? \todo\ErrorController::getDaten()[1] : '';}; ?>" name="todo"></td>
                    <td><input type="text" name="date" value="<?php if (!$result){ echo (\todo\ErrorController::getDaten()[0] == 1) ? \todo\ErrorController::getDaten()[1] : '';}; ?>"></td>
                    <td></td>
                </tr>
                <tr >
                    <td colspan="4"><input type="submit" name="sende"></td>
                </tr>
                </form>
                </tbody>
            </table>
            <?php if(!$result){ ?>
                <div class="alert alert-danger" role="alert"><?php echo \todo\ErrorController::getError(); ?></div>
            <?php } ?>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- jQuery Version 1.11.1 -->
<script src="view/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="view/js/bootstrap.min.js"></script>

</body>

</html>