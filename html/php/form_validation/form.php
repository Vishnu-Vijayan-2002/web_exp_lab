<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
            font-size: 14px;
        }
        button {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <p class="error"><?php echo $error; ?></p>
        <p class="success"><?php echo $success; ?></p>
        <form method="POST">
            <input type="text" name="name" placeholder="Enter Name">
            <input type="text" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
