<?php
//$GLOBALS là một biến siêu toàn cục PHP 
// sử dụng để truy cập từ bất kỳ nơi nào trong mã nguồn PHP.
$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
//$_SERVER là một biến siêu toàn cục 
// chứa thông tin của headers, paths, và script locations.
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
//$_REQUEST thường được sử dụng để tập hợp các dữ liệu 
// sau khi được submit từ một HTML form.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* collect value of input field */
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
// $_POST được sử dụng rộng rãi để thu thập dữ liệu form 
// sau khi sumit một HTML form cùng với phương thức POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* collect value of input field */
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

// $_GET có thể được sử dụng để thu thập dữ liệu 
// sau khi submit từ một HTML form cùng với phương thứ GET.
/**<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_GET</title>
</head>
<body>
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $_GET</a>
</body>
</html> */
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

// Các hàm làm việc với chuỗi

// strlen() - Lấy độ dài của một chuỗi
echo strlen("Hello world!"); // outputs 12

// str_word_count() - Đếm số từ trong một chuỗi
echo str_word_count("Hello world!");  // outputs 2

// sttrev() - Đảo ngược chuỗi
echo strrev("Hello world!");// outputs !dlrow olleH

// strpos() - Tìm kiếm một đoạn văn bản xác định bên trong một chuỗi
echo strpos("Hello world!", "world"); // outputs 6

// str_replace() - Thay thế văn bản bên trong một chuỗi
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

// Để tạo một hằng số chúng ta sử dụng hàm define()
// Cú pháp:

// define(name, value, case-insensitive)
// Với các tham số:

// name: tên của hằng số
// value: giá trị của hằng số
// case-insensitive: kiểm tra liệu tên hằng phân biệt chữ hoa-thường. Mặc định là false.
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// Câu lệnh If
// if (condition) {
//     code to be executed if condition is true;
// }
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}

// Câu lệnh if…else
// if (condition) {
//     code to be executed if condition is true;
// } else {
//     code to be executed if condition is false;
// }
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}


// Câu lệnh if…else if…else
// if (condition) {
//     code to be executed if this condition is true;
// } elseif (condition) {
//     code to be executed if this condition is true;
// } else {
//     code to be executed if all conditions are false;
// }
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

// Câu lệnh switch
// switch (n) {
//     case label1:
//         code to be executed if n=label1;
//         break;
//     case label2:
//         code to be executed if n=label2;
//         break;
//     case label3:
//         code to be executed if n=label3;
//         break;
//     ...
//     default:
//         code to be executed if n is different from all labels;
// }
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

// Vòng lặp while
// while (condition is true) {
//     code to be executed;
// } 
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

// Vòng lặp do…while
// do {
//     code to be executed;
// } while (condition is true);
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

// Vòng lặp for
// for (init counter; test counter; increment counter) {
//     code to be executed;
// }
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

// Vòng lặp foreach
// foreach ($array as $value) {
//     code to be executed;
// }
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';