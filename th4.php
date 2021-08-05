<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <h2>Từ Điển Anh - Việt</h2>
    <form method="post">
        <input type="text" name="search" placeholder="Nhập từ cần tìm" />
        <input type="submit" id="submit" value="Tìm" />
    </form>
</body>

</html>
<?php
$dictionary = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển sách",
    "computer" => "máy tính"

];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchWord) {
            echo "Từ: " . $word . ".<br/>Nghĩa của từ là: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }

    if ($flag == 0) {
        echo "Không tìm thấy!";
    }
}
?>