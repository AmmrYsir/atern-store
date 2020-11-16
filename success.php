<?php

include('mvc/dbView.php');

session_start();

if (empty($_SESSION['id'])) header('location: index.php?invalid-session');
else $id = $_SESSION['id'];

$db = new dbView();

echo '<script>
    if (confirm("Checkout is completed! back to dashboard?")) {
        location.href = "checkout.php?success";
    }
</script>';

$db->DeleteAllCart();


