<!--
 Eric Boyd
 4Apr2024
 SDev 328
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <h1>Cupcake Fundraiser</h1>
        <label for="name">Your name:</label><br>
        <input type="text" id="name" name="name" placeholder="Please input your name.">
        <p>Cupcake flavors:</p>
        <input type="checkbox" id="grasshopper" name="flavor[]" value="grasshopper">
        <label for="grasshopper">The Grasshopper</label><br>
        <input type="checkbox" id="whiskey" name="flavor[]" value="whiskey">
        <label for="whiskey">Whiskey Maple Bacon</label><br>
        <input type="checkbox" id="carrot" name="flavor[]" value="carrot">
        <label for="carrot">Carrot Walnut</label><br>
        <input type="checkbox" id="saltedCaramel" name="flavor[]" value="saltedCaramel">
        <label for="saltedCaramel">Salted Caramel Cupcake</label><br>
        <input type="checkbox" id="redVelvet" name="flavor[]" value="redVelvet">
        <label for="redVelvet">Red Velvet</label><br>
        <input type="checkbox" id="lemon" name="flavor[]" value="lemon">
        <label for="lemon">Lemon Drop</label><br>
        <input type="checkbox" id="tiramisu" name="flavor[]" value="tiramisu">
        <label for="tiramisu">Tiramisu</label><br>
        <button type="submit">Order</button>
    </form>
</body>
</html>