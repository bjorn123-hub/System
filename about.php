<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Bites Cafe</title>
    <link rel="stylesheet" href="styles.css">
    <style>

        body {
            background-image: url("./pictures/background.png");
            background-size: cover;
            background-position: center;
            transition: background 0.5s ease-in-out;
            font-family: Arial, sans-serif;
        }
        header, .cafe-description, h2 {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        
        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            width: 150px; /* Adjusted width */
            height: 150px; /* Adjusted height */
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            width: 50px; /* Adjusted width */
            height: 50px; /* Adjusted height */
            object-fit: cover; /* Added to maintain aspect ratio */
        }

        #menuItemsContainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

    
        .menu-item h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }

        .menu-item p {
            font-size: 14px;
            color: #666;
        }

      
        .search-container {
            margin: 20px 0;
            text-align: center;
        }

        .search-container input {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

  
        .filter-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .filter-btn {
            padding: 10px 20px;
            margin: 5px;
            background-color: #444;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .filter-btn:hover {
            background-color: #666;
        }
        
    </style>
</head>
<body>
   
<section class="navigation">
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php" class="active">About</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </nav>
</section>

<style>
    body {
        background-color: #f0f0f0; /* Light background */
        font-family: Arial, sans-serif;
    }

    .navigation {
        background-color: #333; 
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
    }

    .navigation ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-around; 
    }

    .navigation li {
        margin: 0 15px;
    }

    .navigation a {
        color: #fff; 
        text-decoration: none;
        font-weight: bold;
    }

    .navigation a:hover {
        color: #ffcc00; 
    }

    .navigation a.active {
        border-bottom: 2px solid #ffcc00; 
    }
</style>

    <section class="cafe-description">
        <h2>About Snack Bites Café</h2>
        <p>
            Snack Bites Café is your destination for tasty snacks and meals like nachos, burgers, and donuts. 
            We offer quick bites and satisfying meals, perfect for any time of day!
        </p>
 <p>
            Our café is a cozy spot where you can relax, grab a bite, and enjoy delicious food at affordable prices.
        </p>
    </section>

    <section>
        <h2>About</h2>

  
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search for items...">
        </div>

   
        <div class="filter-container">
            <button class="filter-btn" onclick="filterItems('all')">All</button>
            <button class="filter-btn" onclick="filterItems('Burger')">Burger</button>
            <button class="filter-btn" onclick="filterItems('Chessy Burger')">Chessy Burger</button>
            <button class="filter-btn" onclick="filterItems('Spaghetti')">Spaghetti</button>
            <button class="filter-btn" onclick="filterItems('Mini Donut')">Donut</button>
            
        </div>
        <div id="menuItemsContainer">
        </div>
    </section>

    <script>
    
        const menuItems = [
            {
                name: 'Regular Burger',
                description: 'Classic burger with lettuce, tomato, and pickles.',
                image_url: './pictures/regularburger.png', 
                background_image: './pictures/regularburger.png'
            },
            {
                name: 'Chessy Burger',
                description: 'Classic burger with lettuce, tomato, and pickles.',
                image_url: './pictures/cheesyburger.png',
                background_image: 'https://example.com/regular-burger-bg.jpg'
            },
            {
                name: 'Spaghetti',
                description: 'Pasta with tomato sauce.',
                image_url: './pictures/spaghetti.png',
                background_image: 'https://example.com/c:\Users\jilli\Downloads\spaghetti.jpg.'
            },
            {
                name: 'Cheesy Burger w/ Egg',
                description: 'Juicy burger topped with cheese and a fried egg.',
                image_url: './pictures/eggburger.png',
                background_image: 'https://example.com/cheesy-burger-egg-bg.jpg'
            },
            {
                name: 'Mini Donut',
                description: 'Delicious bite-sized donuts, perfect for a sweet treat.',
                image_url: './pictures/donut.png',
                background_image: 'https://example.com/mini-donut-bg.jpg'
            },
        ];

        
        function loadMenuItems() {
            let container = document.getElementById('menuItemsContainer');
            container.innerHTML = '';  

            menuItems.forEach(item => {
                let menuItemHTML = `
                    <div class="menu-item" onclick="changeBackground('${item.background_image}')">
                        <h3>${item.name}</h3>
                        <img src="${item.image_url}" alt="${item.name}">
                        <p>${item.description}</p>
                    </div>
                `;
                container.innerHTML += menuItemHTML;
            });
        }

       
        function changeBackground(imageUrl) {
            document.body.style.backgroundImage = `url('${imageUrl}')`;
        }

        
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let searchQuery = this.value.toLowerCase();
            let filteredItems = menuItems.filter(item => item.name.toLowerCase().includes(searchQuery));
            let container = document.getElementById('menuItemsContainer');
            container.innerHTML = '';  

            if (filteredItems.length === 0) {
                container.innerHTML = '<p>No items found</p>';
            } else {
                filteredItems.forEach(item => {
                    let menuItemHTML = `
                        <div class="menu-item" onclick="changeBackground('${item.background_image}')">
                            <h3>${item.name}</h3>
                            <img src="${item.image_url}" alt="${item.name}">
                            <p>${item.description}</p>
                        </div>
                    `;
                    container.innerHTML += menuItemHTML;
                });
            }
        });

       
        function filterItems(category) {
            let filteredItems = menuItems.filter(item => {
                if (category === 'all') return true;
                return item.name.includes(category);
            });
            let container = document.getElementById('menuItemsContainer');
            container.innerHTML = '';

            if (filteredItems.length === 0) {
                container.innerHTML = '<p>No items found</p>';
            } else {
                filteredItems.forEach(item => {
                    let menuItemHTML = `
                        <div class="menu-item" onclick="changeBackground('${item.background_image}')">
                            <h3>${item.name}</h3>
                            <img src="${item.image_url}" alt="${item.name}">
                            <p>${item.description}</p>
                        </div>
                    `;
                    container.innerHTML += menuItemHTML;
                });
            }
        }

       
        window.onload = function () {
            loadMenuItems();
        };
    </script>
</body>
</html>