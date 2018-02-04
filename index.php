<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" />
    <style>
      input, select{
        margin-left:5px;
        margin-bottom: 5px;
      }
    </style>
</head>
<body style="margin:20px;">
    <form action="app/controller/loginController/login.php" method="POST">
        <h2>Login</h2>
        <hr/>
        <table>
            <tr>
                <td><label for="username"><strong>Username:</strong></label></td>
                <td><input class="form-control" type="text" name="username" placeholder="Username..."/></td>
            </tr>
            <tr>
                <td><label for="password"><strong>Password:</strong></label></td>
                <td><input class="form-control" type="text" name="password" placeholder="Password..."/></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login" class="btn btn-primary" /></td>
            </tr>
        </table>
    </form>

    <!-- jQuery -->
    <script src="libs/jquery/jquery.mim.js"></script>
    <!-- Bootstrap JS -->
    <script src="libs/bootstrap/css/bootstrap.min.js"></script>
</body>
</html>
