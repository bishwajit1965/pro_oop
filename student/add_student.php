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

                            ?>
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
