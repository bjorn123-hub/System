<?php
session_start();

if (!isset($_SESSION['order'])) {
    header('Location: cart.php');
    exit();
}

$order = $_SESSION['order'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5DEB3;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFF8DC;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #4B3E2F;
        }
        .receipt {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .receipt h3 {
            margin-top: 0;
        }
        .receipt ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .receipt li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .receipt li:last-child {
            border-bottom: none;
        }
        .receipt .total {
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Receipt</h2>
        <div class="receipt">
            <h3>Order Details</h3>
            <ul>
                <li>Reference Number: <?php echo $order['referenceNumber']; ?></li>
            </ul>
            <h3>Order Summary</h3>
            <ul>
                <?php foreach ($order['cart'] as $item): ?>
                    <li><?php echo $item['name']; ?> x <?php echo $item['quantity']; ?> = $<?php echo number_format($item['price'] * $item['quantity'], 2); ?></li>
                <?php endforeach; ?>
                <li>Subtotal: $<?php echo number_format($order['totalPrice'], 2); ?></li>
                <li>VAT (12%): $<?php echo number_format($order['vat'], 2); ?></li>
                <li class="total">Grand Total: $<?php echo number_format($order['grandTotal'], 2); ?></li>
            </ul>
        </div>
    </div>
</body>
</html>

<?php
unset($_SESSION['order']);
?>