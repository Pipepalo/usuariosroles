<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>