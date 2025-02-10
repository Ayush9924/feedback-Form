<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<>
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
    <br>
    <?php
    // php arrays
    $courses = array("PHP", "Laravel", "Node js", "React js");
    echo "I like " . $courses[0] . ", " . $courses[1] . " and " . $courses[2] . ", " . $courses[3];
    echo "<br>";
    echo count($courses);

    ?>
    <br>
    <!-- loop through indexed array -->
    <?php

    $courses = array("PHP", "Laravel", "Node js", "React js");
    $courselength = count($courses);

    for ($x = 0; $x < $courselength; $x++) {
        echo $courses[$x];
        echo "<br>";
    }
    ?>
    <br>
    <?php
    $courses = array("PHP", "Laravel", "Node js", "React js");


    foreach ($courses as $course) {
        echo $course . "<br>";
    }
    ?>

    <?php
    $courses = array("INT220" => "PHP", "INT221" => "Laravel", "INT222" => "Node js");
    echo "INT 220 is " . $courses["INT220"] . "INT 221 is " . $courses["INT221"];
    ?>
    <!-- associative array -->

    <?php
    $courses = array("INT220" => "PHP", "INT221" => "Laravel", "INT222" => "Node js");
    foreach ($courses as $course => $value) {
        echo "key=" . $course . "," . "value=" . $value;
        echo "<br>";
    }
    ?>
    <br>
    <?php
    $courses = array("INT220" => "PHP", "INT221" => "Laravel", "INT222" => "Node js");
    $keys = array_keys($courses);
    $values = array_values($courses);
    for ($x = 0; $x < count($courses); $x++) {
        echo " key=" . $keys[$x] . "," . "value=" . $values[$x] . "<br>";
    }
    ?>

    <?php
    $result = array(
        array("Manoj", 7.8, "pass"),
        array("Aditya", 8.5, "pass"),
        array("Anuj", 4.9, "fail"),
    );

    echo $result[0][0] . " ---- CGPA is: " . $result[0][1] . "<br>";
    echo $result[1][0] . " ---- CGPA is: " . $result[1][1] . "<br>";
    echo $result[2][0] . " ---- CGPA is: " . $result[2][1] . "<br>";
    ?>
    <br>

    <?php
    $result = array(
        array(
            "name" => "Manoj",
            "cgpa" => 7.8,
            "status" => "Pass",
        ),
        array(
            "name" => "Aditya",
            "cgpa" => 8.5,
            "status" => "Pass",
        ),
        array(
            "name" => "Anuj",
            "cgpa" => 4.9,
            "status" => "Fail",
        ),
        array(
            "name" => "Rahul",
            "cgpa" => 6.2,
            "status" => "Pass",
        ),
        array(
            "name" => "Priya",
            "cgpa" => 8.9,
            "status" => "Pass",
        ),
        array(
            "name" => "Sonia",
            "cgpa" => 5.5,
            "status" => "Fail",
        )
    );

    echo $result[0]["name"] . " ---- CGPA is: " . $result[0]["cgpa"] . " ---- Status: " . $result[0]["status"] . "<br>";
    echo $result[1]["name"] . " ---- CGPA is: " . $result[1]["cgpa"] . " ---- Status: " . $result[1]["status"] . "<br>";
    echo $result[2]["name"] . " ---- CGPA is: " . $result[2]["cgpa"] . " ---- Status: " . $result[2]["status"] . "<br>";
    echo $result[3]["name"] . " ---- CGPA is: " . $result[3]["cgpa"] . " ---- Status: " . $result[3]["status"] . "<br>";
    echo $result[4]["name"] . " ---- CGPA is: " . $result[4]["cgpa"] . " ---- Status: " . $result[4]["status"] . "<br>";
    echo $result[5]["name"] . " ---- CGPA is: " . $result[5]["cgpa"] . " ---- Status: " . $result[5]["status"] . "<br>";
    ?>
    <br>
    <?php
    $result = array(
        array("Manoj", 7.8, "pass"),
        array("Aditya", 8.5, "pass"),
        array("Anuj", 4.9, "fail"),
    );
    for ($row = 0; $row < 3; $row++) {
        echo "<h4>ROW number $row</h4>";
        for ($col = 0; $col < 3; $col++) {
            echo $result[$row][$col] . "<br>";
        }
    }
    ?>
    <br>
    <?php
    $a = array("INT219" => "front end web", "INT220" => "PHP", "INT221" => "Laravel");
    $b = array("INT222" => "Node js", "CSE316" => "OS");
    $c = ($a + $b);
    var_dump($c);
    echo "<br>";
    var_dump($a == $b);
    echo "<br>";
    var_dump($a === $b);
    echo "<br>";
    var_dump($a != $b);
    echo "<br>";
    var_dump($a <> $b);
    echo "<br>";
    ?>
    <br>

    <?php
    //  Creating an Indexed Array
    $students = array("Manoj", "Aditya", "Anuj", "Rahul", "Priya");

    // Counting Elements in the Indexed Array
    echo "Total Students: " . count($students) . "<br>";

    //  Removing an Element from the Indexed Array
    unset($students[2]);

    //  Reindexing the Array (Optional)
    $students = array_values($students);

    //  Displaying Updated Array
    echo "Updated Students List:<br>";
    for ($i = 0; $i < count($students); $i++) {
        echo $students[$i] . "<br>";
    }

    // Counting Elements After Removal
    echo "Total Students After Removal: " . count($students) . "<br>";
    ?>

    <br>

    <?php
    // Creating an Indexed Array
    $students = array("Manoj", "Aditya", "Anuj");

    // Accessing Elements in an Indexed Array
    echo "First Student: " . $students[0] . "<br>";
    echo "Second Student: " . $students[1] . "<br>";
    echo "Third Student: " . $students[2] . "<br>";

    // Looping Through an Indexed Array
    echo "All Students:<br>";
    for ($i = 0; $i < count($students); $i++) {
        echo $students[$i] . "<br>";
    }

    // Adding Elements to an Indexed Array
    $students[] = "Rahul";
    $students[] = "Priya";

    echo "Updated Students List:<br>";
    for ($i = 0; $i < count($students); $i++) {
        echo $students[$i] . "<br>";
    }
    ?>
    <br>
    <?php
    // array functions
    // keys and values associative array
    $name = array("Manoj", "Rahul", "Aneesh");
    $marks = array("75", "89", "44");
    $c = array_combine($name, $marks);
    print_r($c);

    ?>
    <br>
    <?php
    // array_chunk()
    $course = array("PHP", "Larvel", "Node.js", "Html", "java");
    print_r(array_chunk($course, 2));
    ?>
    <br>
    <?php
    $course = array("a" => "PHP", "b" => "Larvel", "c" => "Node.js", "d" => "Html", "e" => "java");
    print_r(array_chunk($course, 2));
    echo "<br>";
    ?>


    <?php
    $course = array("a" => "PHP", "b" => "Larvel", "c" => "Node.js", "d" => "Html", "e" => "java");
    print_r(array_chunk($course, 2, true));
    echo "<br>";
    ?>
    <br>
    <?php
    // array_count_values()
    // it will directly count the value number time we used in array
    $a = array("block 22", "block 33", "block 34", "block 34", "block 36");
    print_r(array_count_values($a));
    echo "<br>";
    ?>

    <?php
    // array-diff()
    // it will return the entrys and there difference 
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "cyan", "e" => "yellow");
    $a2 = array("f" => "red", "g" => "green", "h" => "blue");
    $a3 = array("i" => "magreta", "j" => "seagreen");
    $result = array_diff($a1, $a2);
    $result1 = array_diff($a2, $a1);
    print_r($result);
    print_r($result1);
    echo "<br>";
    ?>

    <?php
    // array_flip()
    // key will become value value will become key
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "cyan", "e" => "yellow");
    $result = array_flip($a1);
    print_r($result);
    echo "<br>";
    ?>
    <br>

    <?php
    // array_intersect()
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "cyan", "e" => "yellow");
    $a2 = array("f" => "red", "g" => "green", "h" => "blue");
    $a3 = array("red", "blue");
    $result = array_intersect($a1, $a2);
    print_r(array_intersect($a1, $a2, $a3));
    echo "<br>";

    ?>

    <?php
    // array_merge()
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "cyan", "e" => "yellow");
    $a2 = array("f" => "red", "g" => "green", "h" => "blue");
    print_r(array_merge($a1, $a2));

    ?>

    <?php
    // array pop
    // array push
    $a1 = array("red", "green", "blue");
    array_pop($a1);
    print_r($a1);

    ?>
    <br>
    <?php
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "cyan", "e" => "yellow");
    array_pop($a1);
    echo "<br/>";
    print_r($a);
    ?>

    <?php
    // array_reverse
    $a = array("a" => "Volve", "b" => "BMW", "c" => "Toyota");
    print_r(array_reverse($a));

    ?>
    <br>
    <?php
    $a = array("volvo", "BMW", "Toyota");
    echo "<br/>";
    print_r(array_reverse($a, true));
    echo "<br/>";
    print_r(array_reverse($a));
    ?>
    <br>
    <?php
    // array_search()
    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    echo array_search("red", $a1);
    ?>

    <br>

    <?php
    $a1 = array("a" => "1", "b" => "1", "c" => "1");
    echo "<br/>";
    echo array_search(1, $a1, true);
    echo "<br/>";
    echo array_search(1, $a1);
    ?>
    <br>
    <?php
    // array_slice()
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "cyan", "e" => "yellow");
    print_r(array_slice($a1, 1, 2));
    echo "<br>";

    ?>
    <?php
    $a1 = array("red", "green", "yellow", "brown");
    echo "<br/>";
    print_r(array_slice($a1, 1, 2));
    echo "<br>";
    print_r(array_slice($a1, 1, 2, true));
    ?>

    <?php
    $result = array(
        array('name' => 'manoj', "cgpa" => 6.7, "status" => 'pass'),
        array('name' => 'shalini', 'cgpa' => 9.8, 'status' => 'pass'),
        array('name' => 'mani', "cgpa" => 3.2, "stauts" => 'fail')
    );
    $name = array_column($result, "name");
    print_r($name);

    ?>
<br>
    <?php
    $result = array(
        array('name' => 'manoj', "cgpa" => 6.7, "status" => 'pass'),
        array('name' => 'shalini', 'cgpa' => 9.8, 'status' => 'pass'),
        array('name' => 'mani', "cgpa" => 3.2, "stauts" => 'fail')
    );
    $name = array_column($result, "status", "name");
    print_r($name);
    echo "<br/>";

    ?>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    </body>

</html>