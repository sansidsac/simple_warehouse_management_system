<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Management System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <style>


        header {
            background-color: #004080;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .content {
            padding: 40px;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .content h2 {
            color: #004080;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #333;
            margin-bottom: 40px;
        }

        .btn-login {
            background-color: #004080;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #003366;
        }


    </style>
</head>
<body>

    <header>
        <h1>Warehouse Management System</h1>
    </header>
    <br><br><br><br><br>
    <div class="content">
        <h2>Welcome to the Warehouse Management System</h2><br>
        <p>
            This system provides an easy-to-use interface for managing warehouse operations like tracking products, managing orders, keeping supplier information up to date, and more. 
            With an intuitive layout and powerful features, you can seamlessly monitor the stock levels, manage your suppliers, and maintain order details all in one place.
        </p>


        <a href="pages/products.php" class="btn-login">Login</a>
    </div>

</body>
</html>
