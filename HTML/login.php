<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 60px;
        }

        .login-form {
            max-width: 300px;
            margin: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php
require('db.php');
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $birth = $_GET["birth"];
    $gender = $_GET["gender"];
    $adress = $_GET["adress"];
    $admin = $_GET["admin"];
}
?>

    <div class="login-container">
        <form class="login-form" action="#" method="get">
            <h2>Влез</h2>
            <div class="input-group">
                <label for="username">Потребителско име</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Парола</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Влез</button>
            <p class="link">Нямаш регистрация? <a href="register.php">Кликни тук</a></p>
        </form>
        
    </div>
</body>
</html>
