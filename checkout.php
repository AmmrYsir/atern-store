<?php 

if (isset($_GET['success'])) {
    header('location: dashboard.php');
}

if (isset($_POST['btnComplete'])) {
    if (empty($_POST['email'])) {
        echo "<script>
            alert('Please enter your email address')
        </script>";
    }
    else if (empty($_POST['card'])) {
        echo "<script>
            alert('Please enter your card number')
        </script>";
    }
    else if (empty($_POST['tarikh'])) {
        echo "<script>
            alert('Please enter your card date')
        </script>";
    }
    else if (empty($_POST['cvc'])) {
        echo "<script>
            alert('Please enter your valid CVC')
        </script>";
    }
    else if (empty($_POST['name'])) {
        echo "<script>
            alert('Please enter your card name')
        </script>";
    }
    else header('location: success.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/checkout.css">
    <script src="https://kit.fontawesome.com/9b997b2ecb.js" crossorigin="anonymous"></script>
    <title>Atarn Store | Home</title>
</head>

<body>
    <nav>
        <ul>
            <a class="btn" href="cart.php">
                <i class="fas fa-chevron-left"></i>
                <p>Back</p>
            </a>
        </ul>
    </nav>
    <main class="login-form">
        <h1>Checkout</h1>
        <form method="POST" action="checkout.php">
            <label class="head_label">Pay with card</label>
            <div class="normal-input">
                <label for="email">Email</label>
                <input type="email" name="email" autocomplete="off" maxlength="32">
            </div>
            <div class="card-input">
                <label for="card">Card information</label>
                <input type="tel" name="card" placeholder="1234 1234 1234 1234" maxlength="16">
                <div class="card-information">
                    <input type="tel" name="tarikh" placeholder="MM / YY" maxlength="5">
                    <input type="tel" name="cvc" placeholder="CVC" maxlength="6">
                </div>
            </div>
            <div class="normal-input">
                <label for="name">Name on card</label>
                <input type="text" name="name" autocomplete="off" maxlength="28">
            </div>
            <button id="btnComplete" name="btnComplete">COMPLETE</button>
        </form>
    </main>
</body>

</html>