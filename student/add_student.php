<?php require_once '../includes/_head.php'; ?>
    <body>
        <!-- Add your site or application content here -->
        <div class="container-fluid">
            <?php require_once '../includes/_header.php'; ?>
            <!-- Main content begins -->
            <div class="row bg-light p-2">
                <div class="container">
                    <div class="row">
                        <?php require_once '../includes/_sidebar.php'; ?>
                        <div class="col-sm-9">
                            <!--***** Weite code below *****-->
                            <?php
                            // Autoloads Starter
                            require_once '../App/start.php';
                            // Classes included
                            use Storage\Student\Student as Student;

                            ?>
                            <div class="row">
                                <div class="col-sm-6">
                                <?php
                                if (isset($_GET['addeded'])) {
                                    echo 'Data added';
                                }
                                ?>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address"
                                            class="form-control" placeholder="Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone"
                                            class="form-control" placeholder="Phone...">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit"
                                            class="btn bn-sm btn-success">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                <?php
                                $student = new Student();
                                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                                    $result = $student->insert($_POST);
                                }
                                $some = $student->select();
                                if (isset($some)) {
                                    foreach ($some as $value) {
                                        echo $value.'<br>';
                                    }
                                }
                                // var_dump($some);

                                ?>
                                </div>
                            </div>


                            <!-- ***** Write code above *****-->
                        </div>
                    </div>
                </div>
            </div>
            <!--/Main content ends-->
            <?php require_once '../includes/_footer.php'; ?>
        </div>
        <?php require_once '../includes/_scripts.php'; ?>
    </body>
</html>
