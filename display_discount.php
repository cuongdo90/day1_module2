<?php

   if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $productP = $_POST["Product_Description"];
    $priceP = $_POST["List_Price"];
    $discountP = $_POST["Discount_Percent"];
    $discountAmount = ($priceP * ($discountP / 100));
    $discountPrice = $priceP - $discountAmount;
} 
    echo "<h1>Hoa Don</h1>";
    echo "<br>";
    echo "san pham: $productP";
    echo "<br>";
    echo "gia niem yet: $priceP";
    echo "<br>";
    echo "ty le chiet khau: $discountP";
    echo "<br>";
    echo "gia duoc chiet khau: $discountAmount";
    echo "<br>";
    echo "gia thanh toan: $discountPrice";
    echo  $_POST["Product_Description"];

    // if( $_SERVER["REQUEST_METHOD"] == "POST"){
    //     $moTa = $_POST["Product_Description"];
    //     $giaNiemyYet = $_POST["List_Price"];
    //     $tyLeChietKhau = $_POST["Discount_Percent"];
    //     $Discount_Amount = ($giaNiemyYet * ($tyLeChietKhau/100));
    //     $Discount_Price = ($giaNiemyYet - $Discount_Amount );
    // } 
    //    echo " mô tả sản phẩm : $moTa";
    //    echo "<br>";
    //    echo " giá niêm yết sản phẩm : $giaNiemyYet";
    //    echo "<br>";
    //    echo " tỷ lệ chiết khấu : $tyLeChietKhau";
    //    echo "<br>";
    //    echo " lượng 
?>