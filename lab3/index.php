<?php require 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-3.5.0.min.js"></script>
</head>
<body>

    <form action="gua.php" method="get">
        <p><b>список компьютеров с заданным типом центрального процессора</b></p>
        <p>
            <input type="submit">
        </p>
    </form>

    <form action="proc.php" method="get">
        <p><b>список компьютеров с заданным типом центрального процессора</b></p>
        <select name="po">
            <option>i9</option>
            <option>i7</option>
        </select>
        <p>
            <input type="submit">
        </p>
    </form>

    <form action="pub.php" method="get">
        <p><b>Процессор на базе операционной системы</b></p>
        <select name="proc">
            <option>windows</option>
            <option>linux</option>
        </select>
        <p>
            <input type="submit">
        </p>
    </form>

</body>
</html>