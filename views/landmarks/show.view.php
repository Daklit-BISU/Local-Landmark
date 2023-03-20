<?php require('./views/partials/head.php') ?>

  <body class="bg-blue-200">

    <?php include('./views/partials/nav.php'); ?>
    <section class="overlay"></section>
    
    <div class="flex items-center h-screen mt-15">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex justify-center">
          <img src="<?= htmlspecialchars($landmark['img_src']) ?>" alt="<?= htmlspecialchars($landmark['property_description_title']) ?>" class="max-h-full max-w-full">
        </div>
        <div>
          <h2 class="text-3xl font-bold mb-4"><?= htmlspecialchars($landmark['property_description_title']) ?></h2>
          <p class="text-gray-700 mb-4"><?= htmlspecialchars($landmark['property_description_content']) ?></p>
          <p class="text-gray-700 mb-4"> <?= htmlspecialchars($landmark['property_description_sub_content']) ?></p>
          <div class="flex mb-4">
            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24">
              <path fill="currentColor" d="M12 2c-4.97 0-9 4.03-9 9 0 7 9 13 9 13s9-6 9-13c0-4.97-4.03-9-9-9zm0 12.5c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
            </svg>
            <p class="text-gray-700"><?= htmlspecialchars($landmark['coordinate_y']) ?>, <?= htmlspecialchars($landmark['coordinate_x']) ?></p>
          </div>
          <div class="flex mb-4">
            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24">
              <path fill="currentColor" d="M12 0a7 7 0 0 1 7 7c0 9-7 17-7 17s-7-8-7-17a7 7 0 0 1 7-7zm0 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <a href="<?= htmlspecialchars($landmark['property_link_href']) ?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($landmark['property_link_label']) ?></a>
          </div>
        </div>
      </div>
    </div>

    <script src="./views/partials/app.js"></script>

  </body>

</html>