<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   
   <?php
require_once "db_connect.php"
// Now you can use $conn for queries
?>
<title>Go Green</title>
<nav>
    
    <!--This is the websit image--->
<div class="web_logo">
        <a href="about.php">
        <img src="image/logo.png" width="50px"></a>
</div>
 <!----This is the profile code ----->
 <div class="navbar" >
        <!-- Search bar with clock icon -->
<div class="search-container">
    <i class="fa-regular fa-clock"id="clock"style="size: 30px;"></i>
    <input type="text" id="searchInput" placeholder="Go Green Search...">
    <span id="searchIcon">🔍</span>
</div>
<div class="recent-searches" id="recentSearches">
 
    <!-- Items will be added here dynamically -->
       
</div>
<!---This is the script for item searches-->
<script src="js/script.js"></script>
</div>

<div class="supplier"> Supplier
</div>
                        
                       
<div class="invester">Invester 
</div>


  <div class="profile-container">
    <!-- The User Icon SVG -->
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="profile-icon">
      <path d="M15.316 13.016c1.512-1.058 2.516-2.797 2.516-4.784A5.835 5.835 0 0 0 12 2.4a5.835 5.835 0 0 0-5.832 5.832 5.79 5.79 0 0 0 2.517 4.784C4.343 14.291 1.2 17.996 1.2 22.37v.022c0 .896.843 1.609 1.825 1.609h17.95c.983 0 1.825-.713 1.825-1.61v-.02c0-4.375-3.143-8.08-7.484-9.354ZM7.853 8.232a4.148 4.148 0 0 1 8.294 0 4.148 4.148 0 0 1-8.294 0Zm13.122 14.083H3.025a.245.245 0 0 1-.14-.032c.054-4.45 4.126-8.057 9.115-8.057 4.99 0 9.05 3.596 9.115 8.057a.245.245 0 0 1-.14.032Z" fill="currentColor"></path>
    </svg><br>
    <span class="profile-text">Profile</span>

    <!-- Profile Dropdown (Meesho Style) -->
    <div class="profile-dropdown">
      <div class="user-welcome">
        <h3>Hello User</h3>
        <p>To access your orders and wishlist</p>
      </div>
      
      <!-- Meesho's signature pink action button -->
      <a href="#" id="openSignUp" class="meesho-btn">Sign Up</a>
      
      
      <hr class="dropdown-divider">
      
      <a href="#" class="dropdown-item">
        <span class="icon">📦</span> My Orders
      </a>
      <a href="#" class="dropdown-item">
        <span class="icon">❤️</span> Wishlist
      </a>
       <?php
                include("sign_up.php");
                // login and display users

                ?>
    </div>
  </div>
</div>

      
      
     
  
  
 <script src="js/sign_up.js"></script>

<div>
 <span class="cart" id="cart" style="font-size:30px;cursor:pointer" onclick="openNav()">	&#128722;</span></div>
 <script src="js/script.js"></script>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h3>My Cart</h3>
    <div class="mycart" id="cart-items"></div>
      <h3>Price Details</h3>
      <p><strong>Total:</strong> ₹<span id="cart-total">0</span></p>
      <title>Shopping Cart</title>
    
         <?php
                include("cart.php");
                // Fetch and display users

                ?>
                <?php
                include("itempost_mysqli.php")
                ?>
    </div>
    
</div>
 


<hr>
<script src="js/script.js"></script>
<hr>
  
 <img src="image/image1.webp" width="1920px" height="234"></a>           
</nav>
             
<body>
 <div class="nav-wrapper">
  <nav class="scroll-nav">
    
    <!-- Item 1: Women Ethic -->
    <div class="nav-item">
      <span>Women Ethnic</span>
      <div class="mega-menu">
        <div class="mega-column">
          <h4>Sarees</h4>
          <a href="#">All Sarees</a>
          <a href="#">Silk Sarees</a>
          <a href="#">Cotton Sarees</a>
        </div>
        <div class="mega-column">
          <h4>Kurtis</h4>
          <a href="#">All Kurtis</a>
          <a href="#">Anarkali Kurtis</a>
          <a href="#">Rayon Kurtis</a>
        </div>
        <div class="mega-column">
          <h4>Kurta Sets</h4>
          <a href="#">Palazzo Sets</a>
          <a href="#">Suit Sets</a>
        </div>
      </div>
    </div>

    <!-- Item 2: Women Western -->
    <div class="nav-item">
      <span>Women Western</span>
      <div class="mega-menu">
        <div class="mega-column">
          <h4>Topwear</h4>
          <a href="#">Tops</a>
          <a href="#">Dresses</a>
        </div>
        <div class="mega-column">
          <h4>Bottomwear</h4>
          <a href="#">Jeans</a>
          <a href="#">Jeggings</a>
        </div>
      </div>
    </div>
    <!-- Item 3: tree and flower -->
    <div class="nav-item">
      <span>Tree & Flower</span>
      <div class="mega-menu">
        <div class="mega-column">
          <h4>Tree</h4>
          <a href="#">All Tree</a>
          <a href="#">Fruit Tree</a>
          <a href="#">Flowering Tree</a>
        </div>
        <div class="mega-column">
          <h4>Flower</h4>
          <a href="#">All Flower</a>
          <a href="#">Indoor Flower</a>
          <a href="#">Outdoor Flower</a>
        </div>
      </div>

    <!-- Add more nav-items as needed -->
    
  </nav>
</div>   
 


     



<header>
 

</header> 
            
<main>
 
    
  <div class="column" style="background-color:whitesmoke">
 
          <h2>category</h2>
          <div class="recent">
                            <button class="recent-button"
                                            onclick="toggleDropdown()">Select Tree <!--&emsp; &emsp; &emsp; &emsp; &nbsp; &nbsp; &nbsp; &nbsp; ▼--->

                                                </button>
                                       <div id="recentItems">
                                       <input type="text" 
                                                id="recentSearch" 
                                            placeholder="Search...">
                   
                                                     <div class="recent-item"><a href="almond.php">Almond </a></div>
                                                    <div class="recent-item"><a href="mango.php">Mango</a></div>
            <div class="recent-item"><a href="chikoo.php">Chikoo</a></div>
             <div class="recent-item"><a href="neem.php">Neem</a></div>
            <div class="recent-item"><a href="coconut.php">Coconut</a></div>
            <div class="recent-item"><a href="apple.php">Apple</a></div>
             <div class="recent-item">Ashok</div>
            <div class="recent-item"><a href="ashok.php">Ashok</a></div>
            <div class="recent-item"><a href="chandni.php">chandni</a></div>
            <div class="recent-item"><a href="button_rose.php">button rose</a></div>
             <div class="recent-item"><a href="tulip.php">Tulip</a></div>
             <div class="recent-item"><a href="rose.php">Rose</a></div>
             <div class="recent-item"><a href="sunflower.php">Sunflower</a></div>
              <div class="recent-item"><a href="marigold.php">Marigold</a></div>
               <div class="recent-item"><a href="jasmine.php">Jasmine</a></div>
               <div class="recent-item"><a href="lily.php">Lily</a></div>
               <div class="recent-item">Daisy</div>
               <div class="recent-item">Orchid</div>
               <div class="recent-item">Lavender</div>
               <div class="recent-item">Hibiscus</div>
               <div class="recent-item">Bougainvillea</div>
               <div class="recent-item">Geranium</div>
               <div class="recent-item">Petunia</div>
        
            
        </div>
               
        </div>
       <script src="js/recentitem.js"></script>   
       




                
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:whitesmoke;">

                
                  </div>
                  

                   <?php
                include("itemlist.php");
                // Fetch and display users

                ?>

 


   

                 
 

</main>
         
 <img src="image/chatboticon.png" alt="Chatbot" width="70" height="100" class="chatbot-icon" onclick="toggleChat()">
 <script src="js/chatbot.js"></script> 
 <div class="chat-container" id="chatContainer">
    <div class="chat-header">Support Chatbot</div>
    <div class="chat-box" id="chatBox">
        <div class="message bot-msg">Hello! How can I help you today?</div>
    </div>
    <div class="input-area">
        <input type="text" id="userInput" placeholder="Type a message..." autocomplete="off">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>
<script src="js/chatbot.js"></script> 
 
 <?php
                include("chatbot.php");
                // Fetch and display users

                ?>




    




  <!-- Footer System UI Boundaries Area -->
    <footer class="footer-nav">
        <div class="footer-row-top">India</div>
        <div class="footer-row-bottom">
            <div class="footer-left">
                <a href="about.php">About</a>
                <a href="advertising.php">Advertising</a>
                <a href="business.php">Business</a>
                <a href="how-search-works.php">How Search works</a>
            </div>
            <div class="footer-right">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Settings</a>
            </div>
        </div>
    </footer>

<footer>
  
  <div class="social">
    <div class="media">
       <img src="image/logo.png" width="60px">&nbsp;
       <h1>Go Green </h1>
    </div>
    
    <div class="media"> </div>
    <div class="media">
      <i class="fas fa-map-marker-alt"></i>
      <p>Jalgaon Jamod,
Buldhana,<br>
Maharashtra 443402,
India </p>
    </div>
</div>
  <div class-="ourstory">
  <p>Author: Rajashri Umbakar
  <a href="mailto:rajashriumbarkar@26.com">rajashri@go-green.com</a>
  <img src="image/logo.png" width="20px"></p>
</div>
<div class="social-icons">
        <a href="#" class="facebook" data-url="https://www.facebook.com" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="twitter" data-url="https://twitter.com" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="instagram" data-url="https://www.instagram.com" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="linkedin" data-url="https://www.linkedin.com" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
</div>

</footer> 
 
        
 
    
</body>
</html>

   