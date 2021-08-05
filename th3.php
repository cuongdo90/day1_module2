<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <?php
        $customerList = [
            "1" => [
                "ten" => "Mai Văn Toàn",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Hà Nội",
                "hotline" => "8123751537",
                "anh" => "image/1.jpeg"
                
            ],
            "2" => [
                "ten" => "Nguyễn Chặt Chuối",
                "ngaysinh" => "1983-08-20",
                "diachi" => "An Giang",
                "hotline" => "83614734639",
                "anh" => "image/2.jpeg"
            ],
            "3" => [
                "ten" => "Nguyễn Thái Rau",
                "ngaysinh" => "1983-08-21",
                "diachi" => "Nam Định",
                "hotline" => "83614734639",
                "anh" => "image/3.jpeg"
            ],
            "4" => [
                "ten" => "Trần Dần",
                "ngaysinh" => "1983-08-22",
                "diachi" => "Hà Giang",
                "hotline" => "83614734639",
                "anh" => "image/4.jpeg"
            ],
            "5" => [
                "ten" => "Nguyễn Đình Chỉ",
                "ngaysinh" => "1983-08-17",
                "diachi" => "Hà Nội",
                "hotline" => "83614734639",
                "anh" => "image/5.jpeg"
            ],
            "6" => [
                "ten" => "Lê Đức Lươn",
                "ngaysinh" => "1983-08-17",
                "diachi" => "Hà Nội",
                "hotline" => "83614734639",
                "anh" => "image/6.jpeg"
            ]
        ];



        ?>
    <table>
        <caption>
            <h1>Danh sách khách hàng</h1>
        </caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Hotline</th>
                <th>Ảnh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerList as $key => $value) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $value["ten"] ?></td>
                    <td><?php echo $value["ngaysinh"] ?></td>
                    <td><?php echo $value["diachi"] ?></td>
                    <td><?php echo $value["hotline"] ?></td>
                    <td><img src="<?php echo $value["anh"] ?>" style="width:150px; height:150px"></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>