<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Script CSS -->
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="calculate.php" method="POST">
        <input type="text" name="numb1">
        <input type="text" name="numb2">
        <select name="cal">
            <option value="add">Additionner</option>
            <option value="sub">Soustraire</option>
            <option value="mul">Multiplier</option>
            <option value="div">Diviser</option>
        </select>
        <button type="submit">Calculer</button>
    </form>
</body>
<footer>

</footer>
</html>
