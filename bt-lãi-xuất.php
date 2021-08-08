<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:brown ">Tính lãi xuất</h1>
    <form action="" method="POST">
        <input type="number" name="Inventment_Amount" placeholder="lượng tiền đầu tư ban đầu"> <br/>
        <input type="text" name="Yearly_Interrest_Rate" placeholder="lãi xuất theo năm"> <br/>
        <input type="text" name="Nunber_of_Year" placeholder="số năm đầu tư"> <br/>
        <input type="submit" name="Future_Value" value="Calculate"> <br/>
    </form>
    <?php


if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $money = $_POST["Inventment_Amount"];
        $interest = $_POST["Yearly_Interrest_Rate"];
        $numberFive = $_POST['Nunber_of_Year'];
        $interestValue = ($money * $interest) / 100;         
    }
echo $result = $money + ($interestValue * $numberFive);
    ?>
</body>
</html>