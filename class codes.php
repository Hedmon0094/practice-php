<?php
function square($n) {
    return $n * $n;
square(10);
}
echo "The square of 10 is " . square(10). "<br>";


function area($raduis) {
    return 3.14 * square($raduis);

}
area(14);
echo "The area of a circle of raduis 14  in centimeters is " . area(14) . "<br>";

$age = 15;
function age(){
    GLOBAL $age;
    $age++;
    echo "Age is $age <br>";
}
age();


function keep_track() {
    static $count = 0;
    $count++;
    echo $count;
    echo "<br>";
}
keep_track();
keep_track();
keep_track();

define("Text view", 55);
echo constant("Text view"). "<br>";

// Operators
// Comparision operators
// 1.=== : Identical- returns true if both the value and data type are the same
// 2. !== : Not identical- returns true if the value and data type are not the same
// 3. == : Equal- returns true if the value is equal
// 4. != : Not equal- returns true if the value is not equal
// 5. <> : Not equal- returns true if the value is not equal
// 6. > : Greater than- returns true if the value is greater than
// 7. < : Less than- returns true if the value is less than
// 8. >= : Greater than or equal to- returns true if the value is greater than or equal to
// 9. <= : Less than or equal to- returns true if the value is less than or equal to

// Grade

$grade = 25;
if ($grade >= 40) {
    echo "Pass <br>";
} else {
    echo "Fail <br>";
}

//increment
$x = 10;
echo ++$x . "<br>";

//logical operators
// 1. and : Returns true if both statements are true
// 2. or : Returns true if either of the statements is true
// 3. xor : Returns true if either of the statements is true, but not both
// 4. && : Returns true if both statements are true
// 5. || : Returns true if either of the statements is true
// 6. ! : Returns true if the statement is false

//A leap year is divisible by 400 or by 4 but not 100.Write a code that determines whether a year is a leap year or not.
$year = 2025;
if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0) {
    echo "$year is a leap year <br>";
} else {
    echo "$year is not a leap year <br>";
}

//string operators
// 1. . : Concatenation- Joins two strings
// 2. .= : Concatenation assignment- Joins the right operand to the left operand and assigns the result to the left operand
$first_name = "Hedmon";
$last_name = "Achacha";
echo $first_name . " " . $last_name . "<br>";
$first_name .= " " . $last_name;
echo $first_name . "<br>";

//what's the output of the following code
$x = "A";
$y= "B";
$z= "C";
echo $x . $y."<br>";
echo $z .= $x."<br>";
echo $y .= $z."<br>";
echo $y;

//Array operators
// 1. + : Union- Returns an array containing all the elements of both arrays
// 2. == : Equality- Returns true if both arrays have the same key/value pairs
// 3. === : Identity- Returns true if both arrays have the same key/value pairs in the same order and of the same types
// 4. != : Inequality- Returns true if both arrays do not have the same key/value pairs
// 5. <> : Inequality- Returns true if both arrays do not have the same key/value pairs
// 6. !== : Non-identity- Returns true if both arrays are not identical
$x = array("a" => "red", "b" => "green", "c" => "blue");
$y = array("d" => "yellow", "e" => "purple", "f" => "pink");
$z = $x + $y;
// echo $x + $y;
// echo $x == $y;
// echo $x === $y;
echo $x != $y ;

//ternary operator
//syntax: (condition) ? value if true : value if false
$age = 10;
$age >= 18 ? $adult = "yes" : $adult = "no";
echo "Is the person an adult? $adult <br>";

$x= 100;
$y= 50;
$result = ($x > $y) ? "greater" : "smaller";
echo "The result is $result <br>";

//assuming you got 28 in BIT 313, write a code that determines whether you passed or failed
$marks = 28;
$marks >= 40 ? $result = "passed" : $result = "failed";
echo "You $result <br>";

//write an if else statement that checks if an integer declared as month is a valid month and prints the name of the month.
$month = 11;
if ($month == 1) {
    echo "January <br>";
} elseif ($month == 2) {
    echo "February <br>";
} elseif ($month == 3) {
    echo "March <br>";
} elseif ($month == 4) {

    echo "April <br>";
} elseif ($month == 5) {
    echo "May <br>";
} elseif ($month == 6) {
    echo "June <br>";
} elseif ($month == 7) {
    echo "July <br>";
} elseif ($month == 8) {
    echo "August <br>";
} elseif ($month == 9) {
    echo "September <br>";
} elseif ($month == 10) {
    echo "October <br>";
} elseif ($month == 11) {
    echo "November <br>";
} elseif ($month == 12) {
    echo "December <br>";
} else {
    echo "Invalid month <br>";
}


//switch statement
//syntax
// switch (expression) {
//     case label1:
//         code to be executed if expression = label1;
//         break;
//     case label2:
//         code to be executed if expression = label2;
//         break;
//     case label3:
//         code to be executed if expression = label3;
//         break;
//     default:
//         code to be executed if expression is different from all labels;
// }
$day = 6;
switch ($day) {
    case 1:
        echo "Monday <br>";
        break;
    case 2:
        echo "Tuesday <br>";
        break;
    case 3:
        echo "Wednesday <br>";
        break;
    case 4:
        echo "Thursday <br>";
        break;
    case 5:
        echo "Friday <br>";
        break;
    case 6:
        echo "Saturday <br>";
        break;
    case 7:
        echo "Sunday <br>";
        break;
    default:
        echo "Invalid day <br>";
}

//write a switch case code to determine if an interger  entererd as month is a valid month and returns the name of the month
$month = 11;
switch ($month) {
    case 1:
        echo "January <br>";
        break;
    case 2:
        echo "February <br>";
        break;
    case 3:
        echo "March <br>";
        break;
        case 4:
        echo "April <br>";
        break;
        case 5:
        echo "May <br>";
        break;
        case 6:
        echo "June <br>";
        break;
            
            
        case 7:
        echo "July <br>";
        break;
        case 8:
            echo "August <br>";
            break;
        case 9:
            echo "September <br>";
            break;
        case 10:
            echo "October <br>";
            break;
        case 11:
            echo "November <br>";
            break;
        case 12:
            echo "December <br>";
            break;
        default:
        echo "Invalid month <br>";
}



