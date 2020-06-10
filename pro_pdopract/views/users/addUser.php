<!doctype html>
<html class="no-js" lang="">
<?php include_once('../partials/_head.php'); ?>

<body>
    <div class="container-fluid">
        <?php include_once('../partials/_header.php'); ?>
        <div class="row main-content">
            <?php include_once('../partials/_left-sidebar.php'); ?>
            <div class="col-sm-10 middle-content">
                <div class="card">
                    <div class="card-header">
                        <h5>Php Data Object Practice</h5>
                    </div>
                    <div class="card-body">
                    <!-- Code here below-->
                    <?php
                    include_once('../../app/start.php');
                    $users = new User;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['submit'])) {
                            $name    = $_POST['name'];
                            $address = $_POST['address'];
                            if (isset($_POST['submit'])) {
                                if (empty($_POST['name'])) {
                                    echo
                                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>ERROR!</strong> Name field remained blank!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                                } elseif (empty($_POST['address'])) {
                                    echo
                                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>ERROR!</strong> address field remained blank!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                                } else {
                                    $data = $users->insert($name, $address);
                                    if ($data) {
                                        header("Location: index.php?inserted=1");
                                    } else {
                                        header("Location: index.php?inserted=0");
                                    }
                                }
                            }
                        }
                    }
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name....">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" 
                            class="form-control" id="address" placeholder="Enter address....">
                        </div>
                        <button type="submit" name="submit" value="insert" class="btn btn-primary">Add user</button>
                    </form>
                    <!-- Code above-->
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../partials/_footer.php'); ?>
    </div>
</body>
</html>