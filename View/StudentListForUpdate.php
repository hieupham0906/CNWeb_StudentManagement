<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Danh sach sinh vien</h1>
        <?php
            for ($i=1; $i <= sizeof($student); $i++) {
                echo "<li>" . $i . ". <a href='?up=" . $student[$i]->id . "'>" . $student[$i]->name . "</a></li>";
            }
        ?>
        <p class="return"><a href="../index.php">Trở về</a></p>

</body>
</html>