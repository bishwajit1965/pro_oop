<?php require_once 'partials/_head.php';?>
    <body>
        <!-- Add your site or application content here -->
        <div class="container-fluid">
            <?php require_once 'partials/_header.php';?>
            <!-- Main content begins -->
            <div class="row bg-light p-2">
                <div class="container">
                    <div class="row">
                        <?php require_once 'partials/_sidebar.php';?>
                        <div class="col-sm-9">
                        <!--***** Weite code below *****-->
                        <?php
                        ///////////////////////
                        // Autoloads Starter //
                        ///////////////////////
                        require_once 'App/start.php';
                        //////////////////////
                        // Classes included //
                        //////////////////////
                        use Storage\Calculator\Circle as Circle;
                        use Storage\Calculator\Rectangle as Rectangle;
                        use Storage\Calculator\Triangle as Triangle;
                        use Storage\DesignPatterns\Factory\AutomobileFactory as AutomobileFactory;
                        use Storage\DesignPatterns\Template\Ebook as Ebook;
                        use Storage\Inheritance\Book as Book;
                        use Storage\Inheritance\Main as Main;
                        

                        ///////////
                        // Trait //
                        ///////////
                        use Storage\DesignPatterns\Template\PaperBack as PaperBack;

                        ///////////////////
                        // DesignPattern //
                        ///////////////////
                        // Factory
                        use Storage\DynamicData\DynamicData as DynamicData;

                        //////////////////////
                        // Strategy Pattern //
                        //////////////////////
                        use Storage\Interfacer\CircleArea as CircleArea;

                        ///////////////
                        // Visiblity //
                        ///////////////
                        use Storage\Visiblity\Visiblity as Visiblity;

                        ///////////////
                        // Interface //
                        ///////////////
                        use Storage\Interfacer\RectangleArea as RectangleArea;

                        //////////////////////
                        // Strategy pattern //
                        //////////////////////
                        use Storage\StrategyPattern\SendEmail as SendEmail;
                        use Storage\StrategyPattern\SendSms as SendSms;

                        ///////////
                        // Trait //
                        ///////////
                        use Storage\TraitsExample\TesterTrait as TesterTrait;

                        /////////////////////
                        // Adapter pattern //
                        /////////////////////
                        use Storage\adapterPattern\SimpleBook as SimpleBook;
                        use Storage\adapterPattern\BookAdapter as BookAdapter;

                        ///////////////////
                        // Array Testing //
                        ///////////////////
                        use Storage\ArrayTesting\ArrayTesting as ArrayTesting;

                        ////////////////////
                        // Abstract Class //
                        ////////////////////
                        use Storage\AbstractClass\Honda as Honda;

                        //////////////////////////
                        // Dependency Injection //
                        //////////////////////////
                        use Storage\DependencyInjection\Master as Master;
                        use Storage\DependencyInjection\DependencyInjection as DependencyInjection;

                        //////////////////////////
                        // Classes instantiated //
                        //////////////////////////
                        echo '<h2>Calculator Testing</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' - ';
                            $i++;
                        }
                        echo '<br>';
                        $circle = new Circle();
                        echo 'The area of the circle is :' . $circle->calculate() . ' meteres.' . '<br>';

                        $triangle = new Triangle();
                        echo 'The area of the triangle is :' . $triangle->calculate() . ' meteres.' . '<br>';

                        $rectangle = new Rectangle();
                        echo 'The area of the rectangle is :' . $rectangle->calculate() . ' meteres.' . '<br>';

                        ////////////////////////////////////////
                        // Interfacer circleArea instantiated //
                        ////////////////////////////////////////
                        $circle = new CircleArea();
                        echo 'The area of the interfacer circle is :' . $circle->calculate() . ' meteres.' . '<br>';

                        $rectangle = new RectangleArea();
                        echo 'The area of the rectangle is :' . $rectangle->calculate() . ' meteres.' . '<br>';

                        /////////////////////////////////
                        // Design pattern instantiated //
                        /////////////////////////////////
                        $paperback = new PaperBack();
                        $paperback->setTitle('A Book on Wild Animals of Africa');
                        $paperback->setContent('Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Amet sequi ut, earum, distinctio, dignissimos totam dolores est saepe magnam obcaecati qui.
                        Expedita accusamus, repudiandae magnam corrupti officia facilis at officiis?');
                        echo $paperback->printBook();

                        $ebook = new Ebook();
                        $ebook->setTitle('A Book on Wild Animals of Africa');
                        echo $ebook->generatePdf();

                        //////////////////////////
                        // Factory instantiated //
                        //////////////////////////
                        echo '<h2>Factory design pattern</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' - ';
                            $i++;
                        }
                        echo '<br>';

                        $automobile = AutomobileFactory::create('Bugatti', 'Veyron');
                        echo $automobile->getMakeAndModel();

                        /////////////////
                        // Inheritance //
                        /////////////////
                        echo '<h2>Inheritance</h2>';
                        use Storage\Visiblity\VisiblityTwo as VisiblityTwo;

                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' - ';
                            $i++;
                        }
                        echo '<br>';
                        $main = new Main();
                        $book = new Book($main);
                        $book->store().'<br>';
                        $book->index().'<br>'.'<br>';
                        $book->update().'<br>';

                        /////////////////////
                        //Strategy pattern //
                        /////////////////////

                        echo '<h2>Strategy pattern</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' - ';
                            $i++;
                        }
                        echo '<br>';
                        $msg = new SendSms();
                        $mail = new SendEmail();
                        $msg->message();
                        $mail->message();

                        ///////////////
                        // Visiblity //
                        ///////////////
                        echo '<h2>Visiblity Testing</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' - ';
                            $i++;
                        }
                        echo '<br>';
                        $visiblity = new Visiblity();
                        $visiblity->displayPublic();
                        $visiblity->testVisiblity();

                        $visiblityTwo = new VisiblityTwo();
                        $visiblityTwo->displayPublic();

                        ////////////////////////
                        // Trait instantiated //
                        ////////////////////////
                        echo '<h2>Trait Example</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' <b>-</b> ';
                            $i++;
                        }
                        echo '<br>';

                        $traits = new TesterTrait;
                        $traits->calculate(50, 50);

                        /////////////////////
                        // Adapter pattern //
                        /////////////////////
                        echo '<h2>Adapter pattern Example</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' <b>-</b> ';
                            $i++;
                        }
                        echo '<br>';

                        #code here .......
                        

                        //////////////////
                        //Array Testing //
                        //////////////////
                        echo '<h2>Array Testing Example</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' - ';
                            $i++;
                        }
                        echo '<br>';
                        $arrayTesting = new ArrayTesting();
                        
                        ///////////////////
                        //Abstract calss //
                        ///////////////////
                        
                        echo '<h2>Use of Abstract class</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' - ';
                            $i++;
                        }
                        echo '<br>';
                        $honda = new Honda();
                        $honda->name();
                        echo '<br>';
                        $honda->data();

                        ////////////////////////
                        //Dependency injection//
                        ////////////////////////
                        
                        echo '<h2>Use dependency injection</h2>';
                        $i ='1';
                        for ($i =1; $i < 80; $i++) {
                            echo ' - ';
                            $i++;
                        }
                        echo '<br>';
                        $master = new Master();
                        $dependencyInjection = new DependencyInjection($master);
                        $dependencyInjection->teach();
                        $dependencyInjection->instruct();
                        $dependencyInjection->guide();
                        echo '<br>';
                        // Methods are chained
                        $dependencyInjection->teach()->instruct()->guide();




                        ?>
                        <!-- ***** Write code above *****-->
                        </div>
                    </div>
                </div>
            </div>
            <!--/Main content ends-->
            <?php require_once 'partials/_footer.php';?>
        </div>
        <?php require_once 'partials/_scripts.php';?>
    </body>
</html>
