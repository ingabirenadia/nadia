<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="va"><br>
    <input type="text" name="v"><br>
    <input type="display" name="display"><br>
    <input type="submit" name="va" placeholder="<?php echo "$result;"?>"><br>
    </form>
<?php
if(isset('$_POST'['submit'])){
    $va=$_POST['va'];
    $va=$_POST['v'];
    $result=$va + $v;
}


?>
</body>
</html>