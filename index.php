<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- Cover -->
<main>
  <div class="hero">
    <a href="shop.php" class="btn1">View all products
    </a>
  </div>
  <!-- Main -->
  <div class="wrapper">
    <h1>OUR PRODUCTS<h1>
  </div>



  <div id="content" class="container">
    <!-- container Starts -->

    <div class="row">
      <!-- row Starts -->

      <?php

      getPro();

      ?>

    </div><!-- row Ends -->

  </div><!-- container Ends -->
  <!-- FOOTER -->
  <footer class="page-footer">
    <div class="page-footer__subline">
      <div class="container clearfix">

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> Ecommerce Website
        </div>

        <div class="developer">
          Developed by Aalam Geer
        </div>

        <div class="designby">
          Design by Aalam Geer
        </div>

      </div>
    </div>
  </footer>
  </body>

  </html>