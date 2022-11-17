<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php   
                echo "<li>Tên: " . $student->name . "</li>";
                echo "<li>Tuổi: " . $student->age . "</li>";
                echo "<li>Trường Đại học: " . $student->university . "</li>";
            ?>
            <p class="return"><a href="../index.php">Trở về</a></p>
</body>
</html>
