
    const searchInput = document.getElementById('searchInput');
    const recentSearches = document.getElementById('recentSearches');

    // Store recent searches in an array
    let recentList = JSON.parse(localStorage.getItem('recentList')) ||  [];

    // Listen for Enter key press
    searchInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter'&& searchInput.value.trim() !== '') {
            const query = searchInput.value.trim();
               const url =  `https://www.google.com/search?q=${encodeURIComponent(query)}`;
            if (query) {
                // Add to recent list (avoid duplicates)
                if (!recentList.includes(query)) {
                    recentList.unshift(query,url);
                    if (recentList.length > 5) recentList.pop(); // Keep only last 5
                }
                updateRecentSearches();
                searchInput.value = '';
                   localStorage.setItem('recentSearches', JSON.stringify(recentSearches));
        
        window.open(url, '_blank');
        searchInput.value = '';
        showRecentSearches();
            }
        }
    });

    // Function to update recent searches list
    function updateRecentSearches() {
        // Clear old items
        recentSearches.innerHTML = '<h5>Recent Searches</h5>';
        recentList.forEach(item => {
            const div = document.createElement('div');
            div.className = 'recent-item';
            div.innerHTML = ` <i class="fa-regular fa-clock"></i> ${item}`;
            recentSearches.appendChild(div);
        });
    }



    //this is the script for cart product 
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

    let cart = [];
    let total = 0;

    function addToCart(name, price, image) {
        // Check if item already exists in cart
        let existingItem = cart.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push({ name, price, image, quantity: 1 });
        }
        updateCart();
    }
    // Remove item from cart
    function removeFromCart(name) {
 cart = cart.filter(item => item.name !== name);
 updateCart();
}

   
   
    function updateCart() {
        const cartContainer = document.getElementById('cart-items');
        cartContainer.innerHTML = '';
        total = 0;

        cart.forEach(item => {
            total += item.price * item.quantity;
            cartContainer.innerHTML += `
                <div class="cart-item" style="border:1px solid #ccc; padding: 10px; margin: 10px 5px;">
                    <button class="remove" onclick="removeFromCart('${item.name}')"> x Remove</button>
                    <img src="${item.image}" alt="${item.name}">
                    <h4>${item.name}</h4>
                    <p>Price: ₹${item.price}</p>
                    <p>Quantity: ${item.quantity}</p>
                    
                </div>
            `;
           
 
 
 });

        document.getElementById('cart-total').innerText = total;
    }


  // Set your rating value here (out of 5)
  const rating = 3.7;
  const starsTotal = 5;

  function updateRating() {
    // 1. Convert the rating to a percentage
    const starPercentage = (rating / starsTotal) * 100;

    // 2. Round to the nearest 10th for clean visuals
    const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;

    // 3. Update the width of the gold star div
    document.getElementById('stars-inner').style.width = starPercentageRounded;

    // 4. Update the text number
    document.querySelector('.number-rating').innerHTML = rating.toFixed(1);
  }

  // Initialize
  updateRating();
  
  ////this is the code for social media icon in index.php
   document.querySelectorAll('.social-icons a').forEach(icon => {
        icon.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            const url = this.getAttribute('data-url');
            if (url) {
                window.open(url, '_blank'); // Open in new tab
            }
        });
    });

     const box = document.getElementById('scrollBox');

  function goStart() {
    // Scrolls to the horizontal start (left: 0)
    box.scrollTo({ left: 0, behavior: 'smooth' });
  }

  function goEnd() {
    // Scrolls to the horizontal end (the full width)
    box.scrollTo({ left: box.scrollcolor, behavior: 'smooth' });
  }