<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .contanier{
            margin:10%;
            width: 50%;
            border: 3px solid;
            padding: 50px;
            background: gray;
        }
    </style>
</head>

?>
<body>
    <div class ="contanier">
        <form action="../sidenav.php" method="post">
            <input type="text" name="email" class="email" placeholder="email">
            <br>
            <br>
            <input type="password" name="password" class="password" placeholder="*******">
            <br><br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>