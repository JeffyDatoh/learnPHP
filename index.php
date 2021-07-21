<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    //Test $_REQUEST
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name: <input type="text" name="fname">
        <input type="submit">    
    </form>

    ///test $_GET
    <form action="test_get.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Email: <input type="text" name= "email">
        <br>
        <input type="submit">    
    </form>

    //test $_POST
    <form action="test_post.php" method="post">
        Name: <input type="text" name="name">
        <br>
        Email: <input type="text" name= "email">
        <br>
        <input type="submit">    
    </form>
    <?php
        // Test comment
        $color = "red";
        echo "mycar is " . $color . "<br>";

        //test variable
        $age = 10;
        $age2 = 20;
        echo "My age is $age";
        echo "<br>";
        echo "My age is " . $age2 . "<br>";
        echo $age;

        //test fucntion
        $x =5;

        function myfunc(){
            $y = 1;
            echo "Loacal output:$y <br>";
        }

        myfunc();

        echo "Global output: $x<br>";

        //test 
        $z = 2;
        $c = 3;

        function test(){
            global $z, $c;
            echo $z+$c;
            echo "<br>";
        }

        test();

        //test
        echo "Hello, php echo","hi","yeah!";
        echo "<br>";
        print "Hello, php print";

        $text1 = "Oh yeah!";
        $text2 = "Oh Hi";

        echo "<br>";
        echo $text1 . " " . $text2;
        print $text1 . " " . $text2;

        //test data type
        echo "<br>";
        var_dump($text1);
        var_dump($age);

        //test class
        
        class Car{
            function Car(){
                $this->model = "BMW";
            }
        }

        /// create an object
        $myCar = new Car();

        /// show object properties
        echo "<br>";
        echo $myCar->model;

        //test $_SERVER
        echo "<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";

        //TEST $_REQUEST
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name1 = $_REQUEST['fname'];
            if(empty($name1)){
                echo "Name is empty";
            }else {
                echo $name1;
            }
        }
    ?>
</body>
</html>