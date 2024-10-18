<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Bites Cafe Shop</title>
    <style>
        /* Set background image for the whole page */
        body {
            background-image: url('c:\Users\jilli\Downloads\Coffee and corn with cinnamon - Special breakfast.jfif'); /* Replace with the actual path */
            background-size: cover; /* Ensures the background covers the entire page */
            background-position: center; /* Centers the background image */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            font-family: Arial, sans-serif; /* Optional: Change the font */
            color: #fff; /* Text color to contrast the background */
        }

        /* Header styling */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
        }

        header .logo h1 {
            color: #BC8F82; /* Color based on image palette */
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

        /* Welcome section styling */
        .welcome {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6); /* Adds transparency over the image */
        }

        .welcome-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .purchase-now {
            background-color: #BC8F82; /* Button color to match image tones */
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .purchase-now:hover {
            background-color: #a67868; /* Darker tone on hover */
        }
    </style>
</head>
<body>

    <!-- Header and Navigation -->
    <header>
        <div class="logo">
            <h1>Logo</h1>
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="Sign Up.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!-- Welcome Section -->
    <section class="welcome">   
        <div class="welcome-content">
            <h2>Welcome to Snack Bites Cafe Shop</h2>
            <button class="purchase-now" onclick="purchaseNow()">Purchase Now</button>
        </div>
    </section>

    <script>
        function purchaseNow() {
            alert("Redirecting to the Menu page.");
            // You can replace the alert with a redirect to the cart or menu page like this:
            // window.location.href = "menu.php";
        }
    </script>
</body>
</html>

