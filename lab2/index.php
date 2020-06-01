<?php require "add/add_ge.php"; ?>
<?php require "add/add_po.php"; ?>
<?php require "add/add_proc.php"; ?>
<?php require "add.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>
<form action="proc.php">
    <p><b>список компьютеров с заданным типом центрального процессора</b></p>
    <select name="proc" id="">
        <?php
        foreach ($choose as $proc) {
            echo "<option value=\"$proc\">$proc</option>";
        }
        ?>
    </select>
    <p><input type="button" value="Выбрать" onclick="getProc();"></p>
</form>
<ul id="result1"></ul>


    <p><b>список компьютеров с установленным ПО (название ПО выбирается из перечня)</b></p>
    <select name="po" id="">
        <?php
        foreach ($po as $type) {
            echo "<option value=\"$type\">$type</option>";
        }
        ?>
    </select>
    <p><input type="button" value="Выбрать" onclick="getPo();"></p>
<ul id="result2"></ul>


<form action="no.php">
    <p><b>список компьютеров с истекшим гарантийным сроком(No это список пк с истекшим сроком)</b></p>
    <p><input type="button" value="Выбрать" onclick="getNo();"></p>
</form>
<ul id="result3"></ul>



</body>
</html>