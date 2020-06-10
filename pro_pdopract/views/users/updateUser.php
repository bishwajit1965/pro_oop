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
                            $user = new User;
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (isset($_POST['btn-update'])) {
                                    if (isset($_GET['update_id'])) {
                                        $id = $_GET['update_id'];
                                        extract($user->getID($id));
                                    }
                                    $id = $_GET['update_id'];
                                    $name = $_POST['name'];
                                    $address = $_POST['address'];
                                    $data = $user->update($id, $name, $address);
                                }
                            }
                            ?>
                            <?php
                            // Update view data fetching
                            $query = "SELECT * FROM users WHERE id = :id";
                            $data = $user->updateView($query);
                            ?>
                            <!-- Code above-->
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php include_once '../partials/_footer.php';?>
        </div>
    </body>
</html>

