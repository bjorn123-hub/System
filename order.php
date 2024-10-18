<?php
session_start();

// Initialize the orders array in the session if it doesn't exist
if (!isset($_SESSION['orders'])) {
    $_SESSION['orders'] = [];
}

// Check if an item was submitted via POST
if (isset($_POST['item'])) {
    // Add the submitted item to the orders array
    $_SESSION['orders'][] = $_POST['item'];
}

// Redirect back to the menu after placing the order
header('Location: view_orders.php');
exit();
?>


<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #BC9F82;
        }

        .orders-container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: white;
            border-radius: 10px;
        }

        .order-item {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 5px;
        }

        h2 {
            color: white;
            text-align: center;
        }

        .back-to-menu {
            display: block;
            margin: 20px auto;
            padding: 10px 15px;
            background-color: #BC9F82;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            width: 150px;
        }

        .back-to-menu:hover {
            background-color: #A88771;
        }
    </style>
</head>
<body>
    <h2>Your Orders</h2>

    <div class="orders-container">
        <?php
        // Check if there are orders stored in the session
        if (isset($_SESSION['orders']) && count($_SESSION['orders']) > 0) {
            foreach ($_SESSION['orders'] as $index => $order) {
                echo "<div class='order-item'>";
                echo "<p>Order #" . ($index + 1) . ": " . htmlspecialchars($order) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>You have not placed any orders yet.</p>";
        }
        ?>
    </div>

    <a href="menu.php" class="back-to-menu">Go Back to Menu</a>
</body>
</html>
