
    <!-- <div class="flex justify-center items-center h-screen">
      <form class="bg-white p-6 rounded-lg shadow-lg w-96" method="post" action="/landmark">
        <h1 class="text-2xl font-bold mb-4">Add a new landmark</h1>
        <div class="mb-4">
          <label for="type" class="block text-gray-700 mb-2">Type</label>
          <select id="type" name="type" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
            <option value="">Select a type</option>
            <option value="Feature">Feature</option>
            <option value="Building">Building</option>
            <option value="Monument">Monument</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="title" class="block text-gray-700 mb-2">Title</label>
          <input id="title" name="title" type="text" placeholder="Enter a title" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
          <label for="content" class="block text-gray-700 mb-2">Content</label>
          <textarea id="content" name= "content" rows= "3" placeholder= "Enter some content"
                    class= "block w-full border-gray-300 rounded-md focus:ring-indigo-
                    500 focus:border-indigo - 500"></textarea >
        </div >
   
        <div class= "flex justify-end mt - 4">
          <button type= "submit"
                  class= "bg-indigo - 600 text-white px - 4 py - 2 rounded-md hover:bg-indigo -
                  700 focus:outline-none focus:ring-indigo - 500 focus:ring-offset -
                  2">Submit
          </button >
        </div >
      </form >
    </div > -->
    
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