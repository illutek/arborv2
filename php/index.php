<?php echo file_get_contents("../html/head.html"); ?>

<body>

  <?php echo file_get_contents("../html/menu-overlay.html"); ?>

  <?php echo file_get_contents("../html/contact-overlay.html"); ?>

  <div class="r-grid-container">

    <?php echo file_get_contents("../html/header.html"); ?>

    <div class="r-main">

      <div class="r-content">
        <div class="container">
          <?php echo file_get_contents("../html/content/home.html"); ?>
        </div>
      </div>

      <?php echo file_get_contents("../html/footer.html"); ?>
      </footer>
    </div>



    <div class="r-footer__copy">
      © <?php echo date('Y'); ?> | ARBOR SERVICE
    </div>

  </div>

  </div>

  <?php echo file_get_contents("../html/cookie-alert.html"); ?>

</body>

<script src="../dist/js/all.js"></script>

</html>