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

                            // Trait instantiated
                            $objectTrait = new MyHelloWorld();
                            $objectTrait->sayHello().'<br>';

                            // Design pattern instantiated
                            $paperback = new PaperBack();
                            $paperback->setTitle('A Book on Wild Animals of Africa');
                            $paperback->setContent('Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Amet sequi ut, earum, distinctio, dignissimos totam dolores est saepe magnam obcaecati qui.
                            Expedita accusamus, repudiandae magnam corrupti officia facilis at officiis?');
                            echo $paperback->printBook();

                            $ebook = new Ebook();
                            $ebook->setTitle('A Book on Wild Animals of Africa');
                            echo $ebook->generatePdf();

                            // Factory instantiated
                            echo '<h2>Factory design pattern</h2>';

                            $automobile = AutomobileFactory::create('Bugatti', 'Veyron');
                            echo $automobile->getMakeAndModel();

                            // Inheritance
                            echo '<h2>Inheritance</h2>';
                            use Storage\Inheritance\Book as Book;

                            $book = new Book();
                            $book->store();
                            $book->index();
                            // Tester

                            // StrategyPattern
                            $email = new SendEmail();
                            $email->message();
                            $message = SendMsg;
                            $message->message();
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
