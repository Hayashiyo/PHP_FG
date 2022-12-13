<?php

/**
 * 1.建立表單
 * 2.建立處理檔案程式
 * 3.搬移檔案
 * 4.顯示檔案列表
 */
include_once "./api/base.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案上傳</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .list{
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .list-item{
            display: flex;
            align-items: center;
            border: 1px solid blueviolet;
        }
    </style>
</head>

<body>
    <h1 class="header">檔案上傳練習</h1>
    <!----建立你的表單及設定編碼----->
    <?php
    if (isset($_GET['upload']) && $_GET['upload'] == 'success') {
        echo "上傳成功";
    }

    ?>
    <form action="./api/upload.php" method="POST" enctype="multipart/form-data">
        <ul>
            <li>描述:<input type="text" name="discription" id=""></li>
            <li>檔案:<input type="file" name="file_name" id=""></li>
            <li><input type="submit" name="" id="" value="上傳"></li>
        </ul>


    </form>



    <!----建立一個連結來查看上傳後的圖檔---->
    <?php
    $files = all('upload');
    if (count($files) > 0) {
        echo " <ul class='list'>";
        foreach($files as $file){

            echo "<li class='list-item'>";
            echo "<div>";
            echo $file['discription'];
            echo "</div>";
            echo "<div>";
            echo $file['file_name'];
            echo "</div>";
            echo "<div>";
            echo $file['size'];
            echo "</div>";
            echo "<div>";
            echo $file['type'];
            echo "</div>";
            echo "</li>";
            echo " </ul>";
        }
    }

    ?>

</body>

</html>