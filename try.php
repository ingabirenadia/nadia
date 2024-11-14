<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiyandikisha kuri serivisi yo kwishyura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 40%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="email"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form yo Kwishyura</h2>
    <form method="post">
        <label for="name">Izina ry'umukiriya:</label>
        <input type="text" id="name" name="name" placeholder="Andika izina ryawe" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Andika email yawe" required>
        
        <label for="amount">Amafaranga:</label>
        <input type="number" id="amount" name="amount" placeholder="Andika amafaranga uri kwishyura" required>
        
        <input type="submit" value="Ohereza Kwishyura">
    </form>
</div>
<div style="height: 20em; border:3px solid black; width:18em;margin: left 20em;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $amount = htmlspecialchars($_POST['amount']);
    echo "<h2>Murakoze $name</h2>";
    echo "<p>Twakiriye ubwishyu bwa: $amount USD.</p>";
    echo "<p>Inyemezabwishyu izoherezwa kuri: $email.</p>";
}


?>
<button>cyaze </button>
</div>
</body>
</html>
