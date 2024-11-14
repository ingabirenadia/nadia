<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System of RELIABLE</title>
    <style>
body{
    outline: none;

    background-color: rgb(250, 248, 248);
}
.img{
    outline: none;

    margin-left: 2em;
    margin-top: 2em;
}
div{
    outline: none;
    
    margin-left: 10em;
    margin-top: 7em;
    
}
.form{
    outline: none;

    height: 17em;
    width: 24.6em;
    border: 2px solid black;
    border-radius: 5Px;
    margin-left: 41.3em;
    margin-top: -9.5em;
}
.io{
    outline: none;

    height: 14em;
    width: 7em;
    margin-top: -13em;
    margin-left: 18em;
}
.si{
    outline: none;

    height: 1.5em;
    margin-top: -0.5em;

    width: 3em;
}
.div1{
    outline: none;

    margin-top: -2em;
    margin-left: 48em;
}
    </style>
</head>
<body>
<?php

   if(isset($_POST['submit'])) {
            $name=$_POST['name'];
            $age=$_POST['age'];
            $country=$_POST['country'];
            $age = $_POST['age']; 
        $id=$_POST['id']; 
            $uvc="$name";
            $u="$age";
            $c="$country";
$y="OLD YEAR";


        }
        ?>
    <h1 style="text-align: center; font-size:40px; padding-top: -2em;">SYSTEM OF ELECTION OR VOTE</b></h1>
    <form method="POST"><br><br><br>
   <input type="text" placeholder="Enter your Name" name="name"  style="height: 2.5em; width: 15em; border: 2px solid black; border-radius: 5px; color: black; margin-left: 7em;" required><br><br>
    <input type="text" placeholder="Enter your Age " name="age" style="height: 2.5em; width: 15em; border: 2px solid black; border-radius: 5px; color: black;  margin-left: 7em;" required><br><br>
    <input type="text"  name="country" placeholder="Enter your Country" style="height: 2.5em; width: 15em; border: 2px solid black; border-radius: 5px; color: black;  margin-left: 7em;" required><br><br>
    <input type="text"  name="id" placeholder="Enter ID Number" style="height: 2.5em; width: 15em; border: 2px solid black; border-radius: 5px; color: black;  margin-left: 7em;" required><br><br>
    <input type="display" name="display" placeholder="<?php 
            if($age<=130 && $age>=18){
                echo "YES VOTING";
            }elseif($age<=1000000 && $age>=130){
                echo "DONT AGE";
            }
            elseif($age<=18 && $age>=16){
                echo "NOT VOTING";
            }elseif($age<=16 && $age>=1){
                echo "YOU CHILD";
            }
    
    ?>" style="height: 2.5em; width: 10em; border: 2px solid black; border-radius: 5px;  margin-left: 16.5em; font-size:40px; margin-top:-5.3em"><br><br>
    <input type="submit"  name="submit" value="SENDING" style="height: 2.5em; width: 15em; border: 2px solid black; border-radius: 5px; color: black;  margin-left: 7em;"><br>
       <b style="margin-left: 68.2em; margin-top:-12.6em"> <img src="./icons8-signature-50.png" alt="" style="height: 2.3em; width:7em; margin-top:-14.6em; margin-left:-11em"></b>
      
    </form>
    <div class="form">
        <h3 style="text-align: center;">VOTING FORM</h3>
<?php
echo "<b>NAME:<b>".$uvc."<br><br>";
echo "<b>AGE:<b>".$u.$y."<br><br>";
echo "<b>COUNTRY:<b>".$c."<br><br>";
echo "<b>VOTING RATE:<b>".$age."<br><br>";
echo "<b>ID NUMBER:<b>".$id."<br><br>";
echo "<b>SIGNATURE:<b>";


?>
        <img src="./icons8-person-48.png" alt="" class="io">

</div>
<div class="div1"><img src="./icons8-signature-24.png" alt="" class="si"></div>

</body>
</html>