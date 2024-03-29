<?php // This file is mostly containing things for your view / html ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title>Pixelalo Building Store</title>
</head>
<body>
<?php

?>
<img id="logo" src="download.jpg" alt="logo">



<div class="container">
    <h1>Place your order</h1>
    <?php // Navigation for when you need it ?>
    <?php /*
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>
    */ ?>
    <form action="index.php" method="post" id="container-all">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email" id="email">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control"/>
                <span class="error">* <?php echo $email_error;?></span>
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street:</label>
                    <input type="text" name="street" id="street" class="form-control">
                    <span class="error">* <?php echo $street_error;?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number:</label>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control">
                    <span class="error">* <?php echo $streetnumber_error;?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" class="form-control">
                    <span class="error">* <?php echo $city_error;?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode</label>
                    <input type="text" id="zipcode" name="zipcode" class="form-control">
                    <span class="error">* <?php echo $zipcode_error;?></span>
                </div>
            </div>
        </fieldset>

        <fieldset id="productscontainer">
            <legend>Products</legend>
            <?php foreach ($products as $i => $product): ?>
                <label>
                    <?php // <?= is equal to <?php echo ?>
                    <input type="checkbox" value=<?php echo $i ?> name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
                    &euro; <?= number_format($product['price'], 2) ?></label><br />
            <?php endforeach; ?>
        </fieldset>

        <button id="button" name="submit" type="submit" class="btn btn-primary">Order!</button>
    </form>

    <footer>You ordered <strong>&euro; <?php echo $_SESSION["totalValue"] ?></strong> in Pixelalo Characters!
        <br>
        <span class="error"> <?php echo "We will ship your order to the following address: " .$address .  "<br>";?> </span>

        <!--        <span class="pixel">--><?php // echo implode(": ", $products[$product]) . "<br>";   ;?><!--</span>-->

    </footer>
</div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>
