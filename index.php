<?php
// session_start();
// if (isset($_SESSION['bought']) && $_SESSION['bought'] == true) {
//     $p = $_SESSION['price'];
//     echo "<div class='alert alert-success>Successfully bought this product for $ $p</div>";
// }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tamper Data</title>
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
      <h3>Buy this Laptop:</h3>
      <img src="./laptop.jfif" alt="laptop" class="img-thumbnail mt-5" />
      <p class="lead">Price: $5000 only</p>
      <hr />
      <form action="pay.php" method="post">
        <label for="inp">
          Enter Quantity:
        </label>
        <input type="number" name="qty" id="qty" />
        <input type="hidden" name="price" id="price" value="5000" />
        <br />
        <button type="submit" class="btn btn-primary">Buy now</button>
      </form>
    </div>
  </body>
</html>
