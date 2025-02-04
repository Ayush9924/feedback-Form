<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    echo "hello \n";
    echo "<br>";
    $year = "2025";
    $wish = "welcome to Lpu";
    var_dump($wish);


    $x = true;
    var_dump($x);
    ?>
    <br>
    <!-- dataTypes -->
    <?php
    $language = array("PHP", "java", "html", "C", "C++", "html");
    var_dump($language);
    ?>

    <br>

    <?php
    $question = "How was your day";
    $question = null;
    var_dump($question);
    ?>
    <!-- constantas -->
    <?php
    define("Wishes", "good evening");
    echo Wishes . "<br>";
    echo constant("Wishes");
    ?>
    <br>

    <!-- constant array -->
    <?php
    define("courses", ["php", "html", "css"]);
    echo courses[0];
    ?>
    <br>
    <!-- cont keyword -->
    <?php
    const Wishess = array("php", "html", "css");
    echo Wishess[0];
    ?>

    <!-- predefine constantas -->
    <?php
    echo "The current line number is" . __LINE__ . ".";
    ?>

    <br>

    <?php
    echo "The current line number is" . __FILE__ . ".";
    ?>
    <br>

    <?php
    echo "The current line number is" . __DIR__ . ".";
    ?>

    <br>
    <?php
    function hello()
    {
        $x = "helloworld";
        echo "$x The current line number is" . __FUNCTION__ . ".";
    }
    ?>

    <!-- expression is a collation of $x=100 right side of opertaion is called as expresion -->
    <!-- casting is use to change dataTypes one to another -->
    <br>
    <?php
    $a = 5;
    $b = 5.40;
    $c = "hello";
    $e = NULL;


    $e = (int) $e;

    var_dump($e);

    var_dump(40);

    var_dump("Ayu");

    var_dump(2.22);

    var_dump(false);

    var_dump([21, 30, 10]);

    var_dump(NULL);
    ?>
    <br>
    <?php
    $x = $y = $z = "letters";
    echo $x;
    echo $y;
    echo $z;
    ?>
    <br>
    <?php
    $x = 6969;
    var_dump(is_int($x));

    $x = 69.69;
    var_dump(is_int($x));
    ?>

    <?php
    $a = 5;
    $b = 5.24;
    $c = "25 kilometers";
    $d = "hello";
    $e = "kilometer 25";
    $f = true;
    $g = NULL;
    var_dump((int) $b);
    var_dump((int) $c);
    var_dump((int) $d);
    ?>

    <?php
    $a = 5;
    $b = 5.34;
    $c = 0;
    $d = -1;
    $e = 0.1;
    $f = "hello";
    $g = "";
    $h = true;
    $i = NULL;
    var_dump((bool) $a);
    var_dump((bool) $b);
    var_dump((bool) $c);
    var_dump((bool) $d);
    var_dump((bool) $e);
    var_dump((bool) $f);
    var_dump((bool) $g);
    echo "<br>";
    ?>
    <!-- arthmetic opertaion -->
    <?php
    $a = 4;
    $b = 10;
    echo ($a + $b);
    echo "<br>";
    ?>
    <!-- assignment opertaion -->
    <?php
    $a = 10;
    echo $a;
    echo "<br>";
    $x = 20;
    $x += 30;
    echo $x;
    echo "<br>";
    $x = 50;
    $x -= 20;
    echo $x;
    echo "<br>";
    $x = 5;
    $x *= 25;
    echo $x;
    echo "<br>";
    $x = 50;
    $x /= 10;
    echo $x;
    echo "<br>";
    $x = 100;
    $x %= 15;
    echo $x;
    echo "<br>";

    ?>
    <!-- comparison opertaion -->
    <?php
    $x = 25;
    $y = 30;
    $z = "25";
    echo var_dump($x == $z);
    echo "<br>";
    echo var_dump($x === $z);
    echo "<br>";
    ?>

    <!-- increamament and decreament -->
    <?php
    $x = 10;
    echo ++$x;
    echo "<br>";
    $x = 10;
    echo $x++;
    echo "<br>";
    echo $x;
    echo "<br>";
    $x = 10;
    echo --$x;
    echo "<br>";
    $x = 10;
    echo $x--;
    echo $x;
    echo "<br>";
    ?>
    <!-- string concatination -->

    <?php
    $x = "hello ";
    $y = "bro";
    echo $x . $y;
    echo "<br>";
    $x .= $y;
    echo $x;
    echo "<br>";
    ?>
    <!-- condtional assignment opertors -->

    <?php
    // ternary operator
    echo $status = (empty($user)) ? "ananymous" : "user";
    echo "<br>";
    $user = "Michael";
    echo $status = (empty($user)) ? "ananymous" : "user";
    echo "<br>";
    ?>
    <!-- Null coalescing -->
    <?php
    echo $status1 = $user1 ?? 'anonymous';
    echo '<br>';
    $user1 = 'Micheal';
    echo $status1 = $user1 ?? 'anonymous';
    echo '<br>';
    ?>

    <!-- logical operator -->
    <?php
    $year = 2014;
    if (($year % 400 == 0) || (($year % 100 != 0) || ($year % 4 == 0))) {
        echo '$year is a leap year.';
    } else {
        echo "$year is not a leap year.";
    }
    ?>

    <!-- control structure -->
    <?php
    $d = date("D");
    echo $d;
    echo "<br>";
    if ($d == "Mon") {
        echo "it's tuesday!";
    }
    ?>

    <?php
    $currentDay = date("l");

    if ($currentDay == "Monday") {
        echo "Today is Monday! Start of the week.";
    } elseif ($currentDay == "Tuesday") {
        echo "Today is Tuesday! Keep going.";
    } elseif ($currentDay == "Wednesday") {
        echo "Today is Wednesday! Halfway through the week.";
    } else {
        echo "Today is not Monday, Tuesday, or Wednesday.";
    }
    ?>
    <br>
    <!-- wrtie a php program for marks if marks is 33 fail print D grade if marks is grater than equal to 50 and less 60 then c grade if marks 65 and less than 80 B grade is the output or alst grater thean qual to 90 A grade if any of the conaditon is there print invald output error -->


    <?php
    $marks = 78;
    if ($marks < 0 || $marks > 100) {
        echo "Invalid output error";
    } elseif ($marks < 33) {
        echo "D grade";
    } elseif ($marks >= 50 && $marks < 60) {
        echo "C grade";
    } elseif ($marks >= 60 && $marks < 80) {
        echo "B grade";
    } elseif ($marks >= 90) {
        echo "A grade";
    } else {
        echo "Invalid output error";

    }

    ?>


    <?php
    $marks = 40;
    $result = ($marks >= 40) ? "Pass" : "Fail";
    echo $result;
    echo "<br>";
    ?>

    <?php
    $nationality = "Indian";
    $age = 20;

    if ($nationality === "Indian") {
        if ($age > 18) {
            echo "Valid";
        } else {
            echo "Invalid";
        }
    } else {
        echo "Invalid";
    }
    ?>

    <?php

    $char = 'A';
    $charLower = strtolower($char);
    echo $charLower;
    echo "<br>";
    switch ($charLower) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            echo "$char is a vowel";
            echo "<br>";
            break;
        default:
            echo "$char is not a vowel";
    }
    ?>

    <?php
    $course = "bca";
    switch ($course) {
        case "bca":
            echo "3";
            break;
        case "btech":
            echo "4";
            break;
        case "bba":
            echo '3';
            break;
    }
    ?>

    <?php
    $author = "Shakespears";
    $book = "merchant of vanic";

    switch ($author) {
        case "Shakespears":
            switch ($book) {
                case "merchant of vanic":
                    echo "Book: merchant of vanic, Price: Rs.360";
                    break;
            }
    }
    ?>
    <br>
    <?php
    // loops
    $i = 1;

    while ($i <= 3) {
        $i++;
        echo "the number is " . $i . "<br>";

    }
    ?>
    <hr>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo "the number is " . $i . "<br>";
    }
    ?>

    <?php
    // we use foreach in case of arrays
    $colors = array("Red", "Green", "Blue");
    foreach ($colors as $value) {
        echo $value . "<br>";
    }
    ?>

    <?php
    $superheros = array(
        "Name" => "Peter Parker",
        "Email" => "Peterparker@mail.com",
        "age" => 18
    );
    foreach ($superheros as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    ?>
    <br>
    <?php
    $superheros = array(
        "Name" => "Ayush",
        "Email" => "Ayush@mail.com",
        "age" => 20,
        "address" => "punjab",
    );
    foreach ($superheros as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    ?>

    <!-- break -->
    <?php
    $B = array("1", "2", "3", "4", "5", "6");
    foreach ($B as $value) {
        echo $value . "<br>";
        //continue;
        break;

    }

    ?>
    <?php
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    foreach ($array as $value) {
        if ($value > 5) {
            break;
        }
        echo $value . " ";
    }
    ?>
    <br>
    <?php
    // nested for loop
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($i == $j) {
                break;
            }
            echo $array[$i] . " ";
        }
    }
    ?>
    <br>
    <?php
    $n = 20;
    while ($n--) {
        if ($n % 2 == 0) {
            echo "even";
            echo $n . "<br>";
        } else {
            echo "odd";
            echo $n . "<br>";
        }
    }
    ?>

    <?php
    $num = array("one", "two", "three", "stop", "four");
    foreach ($num as $element) {
        if ($element == "stop") {
            continue;
        }
        echo "$element </br>";
    }
    ?>

    <?php
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            echo "$i  $j<br/>";
            if ($i == 2 && $j == 2) {
                break;
            }
        }
    }
    ?>

    <?php
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            if (!($i == $j)) {
                continue;
                // skip i and j when it is not equal to 
    
            }
            echo $i . $j;
            echo "</br>";
        }
    }
    ?>

    <?php
    echo "Even num bt 1 to 20 </br>";
    $i = 1;
    while ($i <= 20) {
        if ($i % 2 == 1) {
            $i++;
            continue;
        }
        echo $i;
        echo "</br>";
        $i++;
    }
    ?>


    <?php
    echo "Current Date and Time: " . date("Y-m-d H:i:s") . "\n";

    $hour = date("H");
    if ($hour < 12) {
        echo "Good Morning!\n";
    } elseif ($hour < 18) {
        echo "Good Afternoon!\n";
    } else {
        echo "Good Evening!\n";
    }

    $dayOfWeek = date("l");
    switch ($dayOfWeek) {
        case "Monday":
            echo "It's Monday, the start of the week!\n";
            break;
        case "Friday":
            echo "It's Friday, the weekend is near!\n";
            break;
        case "Saturday":
        case "Sunday":
            echo "It's the weekend, enjoy!\n";
            break;
        default:
            echo "It's a regular weekday.\n";
            break;
    }
    echo "The next 7 days are:\n";
    $i = 0;
    while ($i < 7) {
        echo date("Y-m-d", strtotime("+$i day")) . "\n";
        $i++;
    }


    echo "The next 7 days are:\n";
    for ($i = 0; $i < 7; $i++) {
        echo date("Y-m-d", strtotime("+$i day")) . "\n";
    }

    echo "The date 30 days from now wil l be: " . date("Y-m-d", strtotime("+30 days")) . "\n";
    ?>
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>