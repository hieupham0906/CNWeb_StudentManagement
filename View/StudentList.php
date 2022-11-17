<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="wrapper">
        <div class="title"> Danh sach sinh vien</div>
            <div class="menu">
                <ul>
                    <?php
                    for ($i=1; $i <= sizeof($student); $i++) {
                        echo "<li>" . $i . ". <a href='?stid=".$student[$i]->id . "'>".$student[$i]->name . "</a></li>";
                    }
                    ?>
                </ul>
                <p class="return"><a href="../index.php">Trở về</a></p>

            </div>
    </div>  
        

    
</body>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #CC99CC;
        height: 100vh;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #2a3563;
        }
    .title {
        font-size: xx-large;
        font-weight: bold;
        color: inherit;
    }
    .menu {
        margin-top: 20px;
    }

    .menu ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
        background-color: #ced48f;

    }

    .menu li {
        width: 350px;
        /* background-color: #EED6C4; */
        padding-left: 10px;
    }
    
    .menu ul li a {
        color: inherit;
        display: inline-block;
        text-decoration: none;
        padding: 10.5px 11px;
    }

    .menu ul li:hover {
        color: #FFF3E4;
        background-color: #2a3563;
    }

    .return {
      padding: 8px;
      background-color:#2a3563;
      cursor: pointer;
      color: #fff3e4;
      /* font-weight: 700; */
      border-radius: 5px;
      margin-top: 20px;
      font-size: 12px;
      width: 70px;
      text-align: center;
    }
    
    .return a {
        text-decoration: none;
        color: inherit;
    }
</style>
</html>