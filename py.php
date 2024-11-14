<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
/* styles.css */
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f3f3f3;
}

h2 {
    text-align: center;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 300px;
    width: 100%;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}

</style>

<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST["phone"]);
    $amount = htmlspecialchars($_POST["amount"]);
    
    echo "<h2>Amakuru yishyuwe:</h2>";
    echo "<p>Izina: $name</p>";
    echo "<p>Nimero ya Telefone: $phone</p>";
    echo "<p>Amafaranga: $amount RWF</p>";
}
?>


    <h2>Payment Form</h2>
    <form action="" method="POST">
        <label for="name">Izina:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Nimero ya Telefone:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="amount">Amafaranga:</label>
        <input type="number" id="amount" name="amount" required>

        <button type="submit">Kwishyura</button>
    </form>

</body>
</html>
