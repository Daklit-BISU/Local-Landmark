<?php require('./views/partials/head.php') ?>

  <body class="bg-blue-200">

    <div class="max-w-md mx-auto p-4 bg-gray-100 rounded-lg shadow-lg sm:max-w-sm md:max-w-lg lg:max-w-xl mt-15">
      <ul class="text-lg font-sans text-center sm:text-sm md:text-base lg:text-xl w-full">
          <?php foreach ($landmarks as $landmark) : ?>
          <li class="my-4">
              <a href="/landmark?id=<?= $landmark['id'] ?>" class="text-blue-500 hover:bg-gray-500 hover:text-white block px-2 py-1 rounded-md transition-colors duration-300 w-full">
              <?= htmlspecialchars($landmark['property_description_title']) ?>
              </a>
          </li>
          <?php endforeach; ?>
      </ul>
      <p class="mt-6 flex justify-center">
          <a href="/create" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors duration-300">Add Landmark</a>
      </p>
    </div>

    <?php include('./views/partials/nav.php'); ?>
    <section class="overlay"></section>

    <script src="./views/partials/app.js"></script>

  </body>

</html>