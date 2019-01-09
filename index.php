<?php require_once 'partials/_head.php'; ?>
    <body>
        <!-- Add your site or application content here -->
        <div class="container-fluid">
            <?php require_once 'partials/_header.php'; ?>
            <!-- Main content begins -->
            <div class="row bg-light p-2">
                <div class="container">
                    <div class="row">
                        <?php require_once 'partials/_sidebar.php'; ?>
                        <div class="col-sm-9">
                            <!--***** Weite code below *****-->
                            <?php
                            // Autoloads Starter
                            require_once 'App/start.php';
                            // Classes included
                            use Storage\Calculator\Circle as Circle;
                            use Storage\Calculator\Triangle as Triangle;
                            use Storage\Calculator\Rectangle as Rectangle;
                            use Storage\Interfacer\CircleArea as CircleArea;
                            use Storage\Interfacer\RectangleArea as RectangleArea;
                            // Trait
                            use Storage\Traits\MyHelloWorld as MyHelloWorld;
                            // DesignPattern
                            use Storage\DesignPatterns\Template\PaperBack as PaperBack;
                            use Storage\DesignPatterns\Template\Ebook as Ebook;
                            // Factory
                            use Storage\DesignPatterns\Factory\AutomobileFactory as AutomobileFactory;
                            // Tester
                            // StrategyPattern
                            use Srorage\StrategyPattern\SendEmail as SendEmail;
                            use Srorage\StrategyPattern\SendMsg as SendMsg;

                            // Classes instantiated
                            $circle = new Circle();
                            echo 'The area of the circle is :'.$circle->calculate().' meteres.'.'<br>';

                            $triangle = new Triangle();
                            echo 'The area of the triangle is :'.$triangle->calculate().' meteres.'.'<br>';

                            $rectangle = new Rectangle();
                            echo 'The area of the rectangle is :'.$rectangle->calculate().' meteres.'.'<br>';

                            // Interfacer circleArea instantiated
                            $circle = new CircleArea();
                            echo 'The area of the interfacer circle is :'.$circle->calculate().' meteres.'.'<br>';

                            $rectangle = new RectangleArea();
                            echo 'The area of the rectangle is :'.$rectangle->calculate().' meteres.'.'<br>';

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
            <?php require_once 'partials/_footer.php'; ?>
        </div>
        <?php require_once 'partials/_scripts.php'; ?>
    </body>
</html>
