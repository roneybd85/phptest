<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to My PHP Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My PHP Homepage</h1>
    </header>

    <main>
        <p>This is a simple PHP homepage.</p>
        <p>Today's date is: <?php echo date('l, F j, Y'); ?></p>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> My Website. All Rights Reserved.</p>
    </footer>
</body>
</html>
