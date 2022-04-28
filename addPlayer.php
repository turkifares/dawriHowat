<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add player</title>
</head>
<body>
    <form action="addPlayerFunction.php" method="post">
        <label for="first_name">nom</label> <input type="text" name="first_name" id="first_name" required> <br>
        <label for="last_name">prenom</label> <input type="text" name="last_name" id="last_name" required> <br>
        <label for="img_url">image url</label> <input type="text" name="img_url" id="img_url" >
        <input type="submit" name="submit" value="envoyer">
    </form>
</body>
</html>