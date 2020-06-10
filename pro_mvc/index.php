<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="inc/css/bootstrap-4.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="inc/css/main.css">
    </head>
    <body>
        <div class="container">
            <div class="row p-3 bg-info">
                <div class="col-sm-12 header">
                    <h1>
                    <img src="img/oophp.jpg" alt="Image">
                    Model view controller in object oriented php PDO</h1>
                    Date: <?php echo Date("F j, Y, g:i a"); ?>
                </div>
            </div>
            <div class="row bg-light">
                <div class="col-sm-12 main-content">
                    <h1>Index Page</h1> <hr>
                    <?php
                        echo '<h2>Welcome to MVC Project.</h2>';
                    ?>
                    <?php
                    // Included class, Model, View
                    $url = $_GET['url'];
                    $url = rtrim($url, '/');
                    $url = explode('/', $url);

                    include 'system/libs/ParentController.php';
                    include 'system/libs/Load.php';
                    include 'app/controllers/'.$url[0].'.php';

                    $controller = new $url[0];
                    echo $url[0];
                    echo $url[1];
                    echo $url[2];
                    //echo $controller->myName('Bishwajit');
                    ?>
                </div>
            </div>
            <div class="row py-2 bg-info">
                <div class="col-sm-12 footer">
                    <p>&copy; All rights reserved to Dreamland.com</p>
                </div>
            </div>
        </div>
    </body>
</html>
