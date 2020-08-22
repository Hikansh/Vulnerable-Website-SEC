<?php
session_start();
$price = $_POST['price'];
$qty = $_POST['qty'];
$total = $price * $qty;

if (isset($_POST['buy'])) {
    header('location: success.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet"
    href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css
    >
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="text-center mt-5 container-fluid">
      <h1>Welcome to my Ecommerce website</h1>
      <h3>You are going to buy this laptop:</h3>
      <img src="./laptop.jfif" alt="laptop" class="img-thumbnail mt-5" />
      <hr />
      <p class="lead">Quantity Selected: <?php echo $qty; ?></p>
      <p class="lead">Total Price:  $<?php echo $total; ?></p>
      <form action="pay.php" method="post">
      <button type="submit" class="btn btn-success" name="buy">Buy for $<?php echo $total; ?></button>
    </form>
    <br>
    <a href="index.php" class="btn btn-danger">Go Back</a>
    </div>
</body>
</html>