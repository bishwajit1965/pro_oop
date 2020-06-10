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
                    <div class="card">
                        <div class="card-header">
                            <h5>Php Data Object Practice</h5>
                        </div>
                        <div class="card-body">
                            <!-- Code here below-->
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>DELETE !!!</strong> Are you sure of deleting data ???
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!-- Delete data -->
                            <?php
                            $user = new User;
                            if (isset($_POST['btn-delete'])) {
                                $id = $_GET['delete_id'];
                                $user->delete($id);
                            }
                            ?>
                            <!--Delete view of data  -->
                            <?php
                            $user = new User();
                            $query = "SELECT * FROM users WHERE id = :id";
                            $data = $user->deleteView($query);
                            ?>
                            <!-- Code above-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../partials/_footer.php';?>
    </div>
</body>
</html>