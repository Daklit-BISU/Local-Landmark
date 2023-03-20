<?php require('./views/partials/head.php') ?>

  <body class="bg-blue-200">

    <div id="map"></div>
    <?php include('./views/partials/nav.php'); ?>
    
    <div id="coords-container"></div>
    <section class="overlay"></section>
    <li id="list" class="filter-group"></li>
    
    <script src="./views/partials/app.js"></script>

    <?php include('./views/partials/icons.php'); ?>

  </body>

</html>