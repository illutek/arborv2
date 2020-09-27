<?php echo file_get_contents("../html/head.html"); ?>

<body>
    
<?php echo file_get_contents("../html/menu-overlay.html"); ?>

<?php echo file_get_contents("../html/contact-overlay.html"); ?>

  <div class="r-parent-container">

    <?php echo file_get_contents("../html/header.html"); ?>
    

    <div class="r-parent-main">
      <main>
        <div class="r-content">
          <div class="container">
            <?php echo file_get_contents("../html/content/home.html"); ?>
          </div>
        </div>
      </main>

      <?php echo file_get_contents("../html/footer.html"); ?>
        
    </div>

  </div>
 
  <?php echo file_get_contents("../html/cookie-alert.html"); ?>

</body>

<script src="../dist/js/all.js"></script>

</html>