<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<!-- Info boxes -->

 

<head>
  <style>
    
    .flex-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  /* Set the style for each iframe tag */
  .giphy-embed {
    border: 5px solid;
    border-image: linear-gradient(to right, red, orange, yellow, green, blue, purple);
    border-image-slice: 1;
    margin: 10px;
    flex-basis: calc(33.33% - 20px); /* Set the initial width, minus the margins */
    max-width: 420px; /* Limit the maximum width */
  }
    .hero{
      background-image: url(baba2.jpg);
      background-size: cover;
      
    }
    #tournament{
      background-image: url(#);
      background-size: cover;
    }
    #home .container{
      height: 250px;
    }
    .containe{
      height: 0px;
    }
    .containerss{

    }
    #bt{
      margin-top: 50px;
    }


    @import url("https://fonts.googleapis.com/css?family=Sacramento&display=swap");

#h1 {
  font-size: calc(1px + 5vh);
  
/*   text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
    0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092;
  color: #fccaff; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  font-family: "Sacramento", cursive;
  text-align: center;
  animation: blink  infinite;
  -webkit-animation: blink 12s infinite;
}


/*for chrome and safari*/
@-webkit-keyframes blink {
  20%,
  24%,
  55% {
    color: #111;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  }
}
/*for other browsers*/
@keyframes blink {
  20%,
  24%,
  55% {
    color: #111;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
/*     color: #fccaff;
    text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
      0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  }
}
#jojo{
  height: 53px;
  width: 200px;
}
#jo{
  height: 70px;
  width: 200px;
}

    </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>CMS</title>
 

  <!-- 
    - favicon
  -->
  

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Work+Sans:wght@600&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style1.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-banner-bg.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header active" data-header>
    <div class="container">

    <a href="#" class="logo" >
        <img id="jojo" src="./assets/images/loho.gif" width="110" height="3" alt="#">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

        <?php
// Assume that $isLoggedIn is a boolean variable indicating whether the user is logged in or not

if(!isset($_SESSION['login_id'])){
    echo '<li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Home</a>
          </li>';
} else {
    echo '<li class="navbar-item">
            <a href="index.php" class="navbar-link" data-nav-link>Dashboard</a>
          </li>';
}
?>

          <li class="navbar-item">
            <a href="#ne" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li class="navbar-item">
            <a href="#news" class="navbar-link" data-nav-link>About us</a>
          </li>

          <li class="navbar-item">
            <a href="#hello" class="navbar-link" data-nav-link>contact</a>
          </li>

        </ul>
      </nav>

      <?php 
	if(!isset($_SESSION['login_id']))
  {
    // Display logout button
    echo '<a href="login.php" class="btn" data-btn>Login</a>';
  } else {
    // Display login button
    echo '<a href="ajax.php?action=logout" class="btn" data-btn>Logout</a>';
  } 
?>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <div class="hero has-before" id="home">
        <div class="container">

          <p class="section-subtitle" id="h1">Welcome to</p>

          <h1 class="h1 title hero-title" id="h1">AjaxPrints <br> </h1>

          
          <?php 
	if(!isset($_SESSION['login_id']))
  {
    // Display logout button
    echo '<a href="login.php" class="btn" data-btn id="bt">Check status</a>';
  } else {
    // Display login button
    echo '<a href="index.php" class="btn" data-btn id="bt">Go to Dashboard</a>';
  } 
?>
          

          
                     


        </div>
      </div>




      <!-- 
        - #UPCOMING
      -->

     





      <!-- 
        - #NEWS
      -->

      <section class="section news" aria-label="our latest news" id="news">
      <div class="flex-container">
  <iframe src="babaji2.gif" width="420" height="270" class="giphy-embed" title=""></iframe>
  <iframe src="babaji1.gif" width="420" height="270" class="giphy-embed" title=""></iframe>
  <iframe src="babaji.gif" width="420" height="270" class="giphy-embed" title=""></iframe>
</div>

        <div class="containerss">

          <p class="section-subtitle" data-reveal="bottom">Albums</p>

          <h2 class="h2 section-title" data-reveal="bottom">
            Making your  <span class="span">Memories</span><br> stand the test of time
          </h2>

          <p class="section-text" data-reveal="bottom">
            Our success in creating business solutions is due in large part to our talented and highly committed team.
          </p>

          <ul class="news-list" id="ne">

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/hero-ban.jpg" width="600" height="400" loading="lazy"
                    alt="Innovative Business All Over The World." class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-tag">Albums</a>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01"></time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text"></p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Custom made albums </a>
                  </h3>

                  <p class="card-text"> 
                  Custom albums can be printed on high-quality paper or materials, ensuring that the photos are displayed in the best possible way.
                  </p>
                  <div id="popup-container" style="display: none;">
  <h2></h2>
  <p>Custom-made albums are a great way to showcase your most treasured memories. Whether you're documenting a special occasion like a wedding or a milestone in your life, a personalized album is an excellent way to keep those memories alive. When you choose to create a custom-made album, you have the ability to select the materials and paper that best reflect your personal style.

When it comes to printing your photos, the type of paper you choose is essential to ensure that your images look their best. Custom albums are often printed on high-quality paper that is designed to enhance the vibrancy and clarity of your photos. Some of the popular paper options include glossy, matte, and semi-glossy paper. Glossy paper provides a high-shine finish that makes your images look bright and vibrant, while matte paper has a more subdued finish that gives your photos a more classic and timeless look. Semi-glossy paper falls somewhere in between, offering a balance between the two.</p>
  <button id="close-popup" class="link has-before">Close</button>
</div>

<a href="#" class="link has-before" id="read-more-link">Read More</a>

<script>
  const readMoreLink = document.getElementById("read-more-link");
  const popupContainer = document.getElementById("popup-container");
  const closePopupButton = document.getElementById("close-popup");

  readMoreLink.addEventListener("click", function(event) {
    event.preventDefault();
    popupContainer.style.display = "block";
    readMoreLink.style.display = "none"; // hide the read more link
  });

  closePopupButton.addEventListener("click", function() {
    popupContainer.style.display = "none";
    readMoreLink.style.display = "inline-block"; // show the read more link again
  });
</script>


                </div>

              </div>
            </li>
            

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/hi.jpg" width="600" height="400" loading="lazy"
                    alt="How To Start Initiating An Startup In Few Days." class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-tag">Designs</a>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01"></time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text"></p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Creative album designs</a>
                  </h3>

                  <p class="card-text">
                  Designed with different layouts, backgrounds, colors, and themes, to match the style and personality of the individual or the event. </p>
                  <div id="popup-container1" style="display: none;">
  <h2></h2>
  <p>Album designs can add an extra dimension to your photographs, elevating them from mere snapshots to works of art. Creative album designs are all about combining different design elements such as layouts, backgrounds, colors, and themes to create a unique and personal look for your photo album. Here are some ideas for creative album designs:

Layouts: You can choose from a wide range of layouts for your album, such as grid-style layouts, full-page layouts, or a combination of both. You can also add borders or frames to your images to give them a more polished look.
Colors: Colors play a crucial role in creating the overall look and feel of your album. You can choose colors that match the theme of your album or use contrasting colors to create a bold and vibrant look.
</p>
  <button id="close-popup1" class="link has-before">Close</button>
</div>


<a href="#" class="link has-before" id="read-more-link1">Read More</a>

<script>
  const readMoreLink1 = document.getElementById("read-more-link1");
  const popupContainer1 = document.getElementById("popup-container1");
  const closePopupButton1 = document.getElementById("close-popup1");

  readMoreLink1.addEventListener("click", function(event) {
    event.preventDefault();
    popupContainer1.style.display = "block";
    readMoreLink1.style.display = "none"; // hide the read more link
  });

  closePopupButton1.addEventListener("click", function() {
    popupContainer1.style.display = "none";
    readMoreLink1.style.display = "inline-block"; // show the read more link again
  });
</script>

                </div>

              </div>
            </li>

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/hii.jpg" width="600" height="400" loading="lazy"
                    alt="Financial Experts Support Help You To Find Out." class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-tag">Machinery</a>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01"></time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text"></p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Best Machinery</a>
                  </h3>

                  <p class="card-text">
                  UV Coating Machines: UV coating machines are used to add a glossy finish to printed pages, giving them a professional and polished look. </p>
                  <div id="popup-container2" style="display: none;">
                      <h2></h2>
                      <p>UV coating machines are a type of printing equipment that uses ultraviolet light to cure a liquid coating onto printed pages. This process is known as UV coating and is a popular way to add a glossy finish to printed materials.
                      The advantages of using a UV coating machine include the fact that the resulting finish is more durable than other types of coatings, such as aqueous or varnish coatings. The gloss finish also adds depth and vibrancy to printed colors, making them appear brighter and more eye-catching. 

                      </p>
                      <button id="close-popup2" class="link has-before">Close</button>
                    </div>
                    <a href="#" class="link has-before" id="read-more-link2">Read More</a>

                    <script>
                  const readMoreLink2 = document.getElementById("read-more-link2");
                  const popupContainer2 = document.getElementById("popup-container2");
                  const closePopupButton2 = document.getElementById("close-popup2");

                  readMoreLink2.addEventListener("click", function(event) {
                    event.preventDefault();
                    popupContainer2.style.display = "block";
                    readMoreLink2.style.display = "none"; // hide the read more link
                  });

                  closePopupButton2.addEventListener("click", function() {
                    popupContainer2.style.display = "none";
                    readMoreLink2.style.display = "inline-block"; // show the read more link again
                  });
                </script>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img id="jo"src="./assets/images/loho.gif" width="150" height="73" loading="lazy" alt="Unigine logo">
          </a>

          <p class="footer-text">
            Our success in creating business solutions is due in large part to our talented and highly committed team.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/ojus_apsit/" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Usefull Links</p>

          <ul>

            <li>
              <a href="#" class="footer-link"></a>
            </li>

            <li>
              <a href="#" class="footer-link">Help Center</a>
            </li>

            <li>
              <a href="#" class="footer-link" >Privacy and Policy</a>
            </li>

            <li>
              <a href="./terms.php" class="footer-link">Terms of Use</a>
            </li>

            <li>
              <a href="#hello" class="footer-link">Contact Us</a>
            </li>

          </ul>

        </div>

        <div class="footer-list" id="hello">

          <p class="title footer-list-title has-after">Contact Us</p>

          <div class="contact-item">
            <span class="span">Location:</span>

            <address class="contact-link">
              AP Shah Institute of technology Thane west
            </address>
          </div>

          <div class="contact-item">
            <span class="span">Join Us:</span>

            <a href="mailto:Info@unigine.com" class="contact-link">reception@apsit.edu.in</a>
          </div>

          <div class="contact-item">
            <span class="span">Phone:</span>

            <a href="tel:+12345678910" class="contact-link">+91 9967745203</a>
          </div>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Queries ?</p>

          <form action="indexhome.php" method="get" class="footer-form">
            <input type="email" name="email_address" required placeholder="Your Email" autocomplete="off"
              class="input-field">
              <input type="text" name="query" required placeholder="Your Questions ?" autocomplete="off"
              class="input-field">

            
            <button  type="submit" class="btn" data-btn>Submit</button>
            <?php
            
            // Get the form data
            $email = isset($_GET['email_address']) ? $_GET['email_address'] : '';
            $query = isset($_GET['query']) ? $_GET['query'] : '';
            
            if (!empty($email) && !empty($query)) {
              // Connect to the database
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "css_db";
            
              $conn = mysqli_connect($servername, $username, $password, $dbname);
            
              if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
            
              // Insert the form data into the "queries" table
              $sql = "INSERT INTO queries (email_address, query) VALUES ('$email', '$query')";
            
              if (mysqli_query($conn, $sql)) {
                // If the query was successful, display a success message
                echo "Data submitted successfully!";
              } else {
                // If the query failed, display an error message
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            
              // Close the database connection
              mysqli_close($conn);
            } else {
              // If email and query are empty, display an error message
              echo "Error: Email address and query cannot be empty.";
            }
            ?>
            

          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; AjaxPrints
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - #CUSTOM CURSOR
  -->

  <!--<div class="cursor" data-cursor></div> -->





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>