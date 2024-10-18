<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Bites Cafe Shop</title>
    <style>
        
        body {
            font-family: Arial, sans-serif; 
            color: #fff; 
        }

        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); 
        }

        header .logo h1 {
            color: #BC8F82; 
            margin: 0;
        }

        nav ul {
            display: flex;
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #BC8F82;
            text-decoration: none;
            font-weight: bold;
        }

        .welcome {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6); 
        }

        .welcome-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .purchase-now {
            background-color: #BC8F82; 
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .purchase-now:hover {
            background-color: #a67868; 
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="./pictures/logo.png" width="150" height="150" alt="Snack Bites Cafe Shop Logo"> 
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="cart.php">Cart</a></li>
                
            </ul>
        </nav>
    </header>

    <section class="welcome">   
        <div class="welcome-content">
            <h2>Welcome to Snack Bites Cafe Shop</h2>
            <button class="purchase-now" onclick="purchaseNow()">Purchase Now</button>
        </div>
    </section>
    
    <script>
        function purchaseNow() {
            alert("Redirecting to the Menu page.");
        }
    </script>
</body>
</html>