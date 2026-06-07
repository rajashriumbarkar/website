<!DOCTYPE html>
<html>
<body>
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
    <div class="about-section">

  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            The best offer <br />
            <span class="text-primary">for your business</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
            Eveniet, itaque accusantium odio, soluta, <br>corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? <br>Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div  class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" name="name"  placeholder="First Name"  />
                      <label class="form-label" for="form3Example1"></label>
                    </div>
                    
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="phone" placeholder= "Phone Number"/>
                      <label class="form-label" for="form3Example2"></label>
                    </div>
                  </div>
                </div>
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email" placeholder="Email address"/>
                  <label class="form-label" for="form3Example3"></label>
                </div>
               
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="password" placeholder="Password"/>
                  <label class="form-label" for="form3Example4"></label>
                </div>
               
               <div class="form-check">
             <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
       <label class="form-check-label" for="flexCheckChecked">
      Subscribe to 
       </label>
       </div>
       <br>
                <!-- Checkbox -->
                
               
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                  <div class="mySlides fade">





                  
  <div class="map">
  
 
  <a href="https://www.google.com/maps/place/Jalgaon+Jamod,+Maharashtra+443402/@21.0462238,76.5111052,6306m/data=!3m2!1e3!4b1!4m15!1m8!3m7!1s0x3bd7616bde6f7543:0xda1da503ff1c2070!2sTakli+Khati,+Maharashtra+443402!3b1!8m2!3d21.0114863!4d76.5199195!16s%2Fg%2F12h_4mnc6!3m5!1s0x3bd763eeb451fabb:0xe69373db3fc236b2!8m2!3d21.0474594!4d76.5314817!16zL20vMGdjdDZj?entry=ttu">
  <img src="image\map image.png" style="width:80%">
  <style>
.map{
position: absolute;
  top: 250px;
  left: 800px;
 

}</style>
  <div class="text"> Jalgaon Jamod<br>
Buldhana<br>
Maharashtra 443402
India
 <a href="contact.php">
<div class="contact">Contact us &#128222; </a></div>
</div>
</div>
 </div>
                </div>
              </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->





  <!----
  <form>
  <div>Name: <input type="text" name="name">
  </div>
  <div>Phone: <input type="text" name="phone">
  </div>
  <div>Email: <input type="text" name="email">
  </div>
  <div>password: <input type="text" name="password">
  </div>
  <div><input type="submit">
  </div>
</form>---->




</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
   margin-left:5px;
}

*, *:before, *:after {
  box-sizing: inherit;
  margin-bottom:5px;
 
 
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 6px;
  padding: 0 20px;
}

.card {
  box-shadow: 0 4px 8px 0 #c3d8b5;
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #c3d8b5;
  color: darkgreen;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">

  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/Radha-Photo.png" alt="Radha" style="width:40%">
      <div class="container">
        <h2>Radha Shekokar</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/R-Photo.jpg"alt="Rajashri" style="width:40%">
      <div class="container">
        <h2>Rajashri Umbarkar</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/Nanu-Photo.png" alt="dnyaneshwar" style="width:40%">
      <div class="container">
        <h2>dnyaneshwar Umbakar</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
    
                
              
  <section class="image/p.jpg" data-snippet="s_image_text" data-name="Image - Text" style="background-image: url(&quot;/web/image/580-508544dc/Screenshot%20%2875%29.png&quot;); background-position: 50% 50%;" data-oe-shape-data="{&quot;shape&quot;:&quot;web_editor/Wavy/04&quot;,&quot;flip&quot;:[&quot;x&quot;]}" data-original-id="554" data-original-src="/web/image/554-52cfbd9b/Screenshot%20%2875%29.png" data-mimetype="image/png" data-resize-width="1257">
        
  </section>
  </div>
 </main>
 <footer id="bottom" data-anchor="true" data-name="Footer" class="o_footer o_colored_level o_cc ">
    <div id="footer" class="oe_structure oe_structure_solo" style="" data-oe-id="776" data-oe-xpath="/data/xpath/div" data-oe-model="ir.ui.view" data-oe-field="arch">
<section class="s_title pt48 pb24 o_we_force_no_transition" data-vcss="001" data-snippet="s_title" data-name="Title" style="background-image: none;">
<div class="container s_allow_columns">
<h4><b>Designed</b> for companies</h4>
</div>
</section>
<section class="s_text_block pb32" data-snippet="s_text_block" data-name="Text" style="background-image: none;">
<div class="container">
<div class="row">
<div class="col-lg-5 o_colored_level o_we_force_no_transition">
<p>We are a team of passionate people whose goal is to improve everyone's life through disruptive products.<br> We build great products to solve your business problems. <br>Our products are designed for small to medium size companies willing to optimize their performance.</p>
</div>
<div class="col-lg-3 offset-lg-1 o_colored_level o_we_force_no_transition">
<p class="text-muted">
<b>Go-green</b>
</p>
<p class="text-muted">Anand Nagar Wadi Khurd&nbsp;</p>
<p class="text-muted">Jalgaon (Jamod) 443 402</p>
<p class="text-muted">Maharashtra</p>
</div>
<div class="col-lg-3 o_colored_level" data-bs-original-title="" title="" aria-describedby="tooltip925227">
<ul class="list-unstyled mb-2">
<li data-bs-original-title="" title="" aria-describedby="tooltip154207">
  <i class="fa fa-phone fa-fw me-2" contenteditable="false"></i>
  <span class="o_force_ltr">
    <a href="tel:+1 (650) 555-0111" data-bs-original-title="" title="">+1 (721) 899-5783</a>
  </span>
</li>
<li data-bs-original-title="" title="" aria-describedby="tooltip946154">
  <i class="fa fa-envelope fa-fw me-2" contenteditable="false"></i>
  <span>
    <a href="mailto:hello@mycompany.com" data-bs-original-title="" title="">rajashriumbarkar26@.com</a>
  </span>
</li>
</ul>
<div class="s_social_media text-start no_icon_color o_not_editable" data-snippet="s_social_media" data-name="Social Media" contenteditable="false">
<h5 class="s_social_media_title d-none">Follow us</h5>
<a href="/website/social/github" class="s_social_media_github" target="_blank">
  <i class="fa fa-2x fa-github m-1" contenteditable="false"></i>
</a>
<a href="/website/social/twitter" class="s_social_media_twitter" target="_blank">
  <i class="fa fa-2x fa-twitter m-1" contenteditable="false"></i>
</a>
<a href="/website/social/instagram" class="s_social_media_instagram" target="_blank">
  <i class="fa fa-2x fa-instagram m-1" contenteditable="false"></i>
</a>
<a href="/website/social/linkedin" class="s_social_media_linkedin" target="_blank">
  <i class="fa fa-2x fa-linkedin m-1" contenteditable="false"></i>
</a>
</div>
</div>
</div>
</div>
</section>
</div>
<div class="o_footer_copyright o_colored_level o_cc" data-name="Copyright">
        <div class="container py-3">
            <div class="row">
                <div class="col-sm text-center text-sm-start text-muted">
                    <span class="o_footer_copyright_name me-2" data-oe-id="1414" data-oe-xpath="/data/xpath/span" data-oe-model="ir.ui.view" data-oe-field="arch">Copyright © Go-green</span>

<div class="js_language_selector  dropup d-print-none">
<button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-sm btn-outline-secondary border-0 dropdown-toggle ">
<img class="o_lang_flag" data-oe-model="ir.ui.view" data-oe-id="552" data-oe-field="arch" data-oe-xpath="/t[1]/img[1]" src="" loading="lazy" style="">
    <span class="align-middle">English (US)</span>
</button>
<div role="menu" class="dropdown-menu ">
        <a href="/en/" class="dropdown-item js_change_lang active" data-url_code="en">
<img class="o_lang_flag" data-oe-model="ir.ui.view" data-oe-id="552" data-oe-field="arch" data-oe-xpath="/t[1]/img[1]" src="/base/static/img/country_flags/us.png?height=25" loading="lazy" style="">
            <span>English (US)</span>
        </a>
<a data-oe-model="ir.ui.view" data-oe-id="553" data-oe-field="arch" data-oe-xpath="/t[1]/a[1]" class="o_add_language d-none d-sm-block dropdown-item" href="/web#action=base.action_view_base_language_install&amp;website_id=1&amp;url_return=%2F%5Blang%5D%2F%3F">
<i class="fa fa-plus-circle"></i>
<span>Add a language...</span>
</a>
</div>
</div>

                </div>
            </div>
        </div>
    </div>
</footer>

<!DOCTYPE html>
<html>
<head>
<style>
.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: #5baf5ba6;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: #5baf5ba6;
                 }


.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: #5baf5ba6;
  color: black;
  
}
</style>
</head>
<body>


<article class="all-browsers">
  <h1>follow us</h1>
  <article class="browser">
    <h2>Google Chrome</h2>
    <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
  </article>
  <article class="browser">
    <h2>Mozilla Firefox</h2>
    <p>Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018.</p>
  </article>
  <article class="browser">
    <h2>Microsoft Edge</h2>
    <p>Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer.</p>
  </article>
  <div class="ourstory">
              <p>Our StoryAotearoa New Zealand is the inspiration for this site.
                 We credit this beautiful country for the idea and motivation 
                 to turn PlantMe into a real-life climate solution.

Never before has it been more important for everyone 
to play their part in restoring bio-diversity through planting what you can, 
where you can. 
We built this app to make it easy to keep track of exactly what you are growing. 
Never forget which type of tomato seed you planted and easily share your eco-sourced, 
open pollinated or heritage seeds, seedlings and saplings.
Read more
    </p>
    <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-sm btn-outline-secondary border-0 dropdown-toggle ">
<img class="C:\xamppnew\htdocs\new\image\image.jpg" data-oe-model="ir.ui.view" data-oe-id="552" data-oe-field="arch" data-oe-xpath="/t[1]/img[1]" src="" loading="lazy" style="">
    <span class="align-middle">Sign Up</span>
</button>
    

  
            
</article>



</body>
</html>

<footer>
  

  
  <p>Author: Rajashri Umbakar
  <a href="mailto:rajashriumbarkar@26.com">rajashri@go-green.com</a></p>

   <div class="web_logo">
        <a href="upload_product.php">
        <img src="image/logo.png" width="50px"></a>
</div>


 




</footer>

</div>
</div>
</div>
