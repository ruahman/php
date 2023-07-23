<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>

<body>
    <form action="radio-buttons.php" method="post">
        <input type="radio" name="credit_card" value="visa" /> Visa <br />
        <input type="radio" name="credit_card" value="mastercard" /> MasterCard <br />
        <input type="radio" name="credit_card" value="amex" /> American Express <br />
        <input type="submit" name="confirm" value="confirm" />
    </form>
</body>

</html>

</html>

<?php
if (isset($_POST['confirm'])) {
    $credit_card = $_POST['credit_card'];
    echo "You have chosen " . $credit_card;
}
?>