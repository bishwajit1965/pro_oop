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
                        <?php include_once('../partials/_indexPageMessages.php');?>
                        <table class="table table-hover table-sm table-primary">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $user = new User();
                                $data = $user->viewUser();
                                if ($data) {
                                    $id = 1;
                                    foreach ($data as $user) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $id++; ?>
                                        </td>
                                        <td>
                                            <?= $user->name; ?>
                                        </td>
                                        <td>
                                            <?= $user->address; ?>
                                        </td>
                                        <td>
                                            <a href="updateUser.php?update_id=<?php echo $user->id;?>" class="btn btn-sm btn-primary" onclick="return confirm('Sure to go to edit page ?')"
                                            data-toggle="tooltip" data-placement="top" title="Update article" onclick="return confirm('Sure to go to edit view of this post ?')">Edit</a>

                                            <a href="deleteUser.php?delete_id=<?php echo $user->id;?>" class="btn btn-sm btn-danger" onclick="return confirm('Sure to go to delete page ?')"
                                            data-toggle="tooltip" data-placement="top" title="Delete article" onclick="return confirm('Sure to go to delete view of this post ?')">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                } else {
                                    echo
                                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>EMPTY!</strong> There is nothing to display! .
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- Code above-->
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../partials/_footer.php';?>
        <?php include_once '../partials/_scripts.php';?>
    </div>
</body>

</html>