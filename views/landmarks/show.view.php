<?php require('./views/partials/head.php') ?>

<body class="bg-blue-200">
  <?php include('./views/partials/nav.php'); ?>
  <section class="overlay"></section>

  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded fixed bottom-0 right-0 m-4" onclick="window.history.back()">Back</button>

  <div class="flex items-center h-screen mt-15">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex justify-center">
          <img src="<?= htmlspecialchars($landmark['img_src']) ?>" alt="<?= htmlspecialchars($landmark['property_description_title']) ?>" class="max-h-full max-w-full">
        </div>
        <div class="pr-4 pl-4 ">
          <h2 class="text-3xl font-bold mb-4"><?= htmlspecialchars($landmark['property_description_title']) ?></h2>

          <p class="text-gray-700 mb-4"><?= htmlspecialchars($landmark['property_description_content']) ?>
            <?= htmlspecialchars($landmark['property_link_label']) ?>
            <?= htmlspecialchars($landmark['property_description_sub_content']) ?>
          </p>

          <div class="flex mb-4">
            <svg class="w-6 h-6 mr-2" viewBox="0 0 24 24">
              <path fill="currentColor" d="M12 2c-4.97 0-9 4.03-9 9 0 7 9 13 9 13s9-6 9-13c0-4.97-4.03-9-9-9zm0 12.5c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
            </svg>
            <p class="text-gray-700"><?= htmlspecialchars($landmark['coordinate_y']) ?>, <?= htmlspecialchars($landmark['coordinate_x']) ?></p>
          </div>

          <div class="flex mb-4">
            <svg class="w-auto h-6 mr-2" viewBox="0 0 24 24">
              <path d="M8.465 11.293c1.133-1.133 3.109-1.133 4.242 0l.707.707 1.414-1.414-.707-.707c-.943-.944-2.199-1.465-3.535-1.465s-2.592.521-3.535 1.465L4.929 12a5.008 5.008 0 0 0 0 7.071 4.983 4.983 0 0 0 3.535 1.462A4.982 4.982 0 0 0 12 19.071l.707-.707-1.414-1.414-.707.707a3.007 3.007 0 0 1-4.243 0 3.005 3.005 0 0 1 0-4.243l2.122-2.121z"></path><path d="m12 4.929-.707.707 1.414 1.414.707-.707a3.007 3.007 0 0 1 4.243 0 3.005 3.005 0 0 1 0 4.243l-2.122 2.121c-1.133 1.133-3.109 1.133-4.242 0L10.586 12l-1.414 1.414.707.707c.943.944 2.199 1.465 3.535 1.465s2.592-.521 3.535-1.465L19.071 12a5.008 5.008 0 0 0 0-7.071 5.006 5.006 0 0 0-7.071 0z"></path>
            </svg>
            <a href="<?= htmlspecialchars($landmark['property_link_href']) ?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($landmark['property_link_href']) ?></a>
          </div>
        
        </div>
      </div>
    </div>


    <script src="./views/partials/app.js"></script>

  </body>

</html>