
<?php require('./views/partials/head.php') ?>

<body class="bg-blue-200">
  <?php include('./views/partials/nav.php'); ?>
  
  <section class="overlay"></section>
  
  <div class="flex justify-center items-center h-full">
      <form class="bg-white p-6 rounded-lg shadow-lg w-96 mt-16" 
        method="post" 
        action="/landmark">
        <h1 class="text-2xl font-bold mb-4">Add a new landmark (Functionality-TBA)</h1>

        <div class="mb-4 px-4 w-full">
          <label for="type" class="block text-gray-700 mb-2">Type</label>
          <select id="type" name="type" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
            <option value="" disabled selected>Select a type</option>
            <option value="attraction">Attraction</option>
            <option value="place-of-worship">Place of Worship</option>
            <option value="lodging">Lodging</option>
          </select>
        </div>

        <div class="mb-4 px-4 w-full">
          <label for="title" class="block text-gray-700 mb-2">Title</label>
          <input id="title" name="title" type="text" placeholder="Enter a title" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div class="mb-4 px-4 w-full">
          <label for="content" class="block text-gray-700 mb-2">Content</label>
          <textarea id="content" name= "content" rows= "3" placeholder= "Enter some content"
                    class= "block w-full border-gray-300 rounded-md focus:ring-indigo-500 
                    focus:border-indigo-500"></textarea >
        </div >

        <div class="mb-4 px-4 w-full">
          <label for="address" class="block text-gray-700 mb-2">Address</label>
          <textarea id="address" name="address" rows= "1" placeholder="Enter an address" 
          class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 
          focus:border-indigo-500"></textarea >
        </div>

        <div class="flex flex-wrap mb-4 px-4 w-full">
          <div class="mb-4 px-4 w-full md:w-1/2">
            <label for="longitude" class="block text-gray-700 mb-2">Longitude</label>
            <input id="longitude" name="longitude" type="text" placeholder="Enter longitude coordinates" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
          </div>
          <div class="mb-4 px-4 w-full md:w-1/2">
            <label for="latitude" class="block text-gray-700 mb-2">Latitude</label>
            <input id="latitude" name="latitude" type="text" placeholder="Enter latitude coordinates" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
          </div>
        </div>



        <div class="mb-4 px-4 w-full">
          <label for="image" class="block text-gray-700 mb-2">Image Link</label>
          <textarea id="image" name="image" rows= "1" placeholder="Enter image link" 
          class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 
            focus:border-indigo-500"></textarea >
        </div>

        <div class="mb-4 px-4 w-full">
          <label for="external-link" class="block text-gray-700 mb-2">External Link</label>
          <textarea id="external-link" name="external-link" rows="1" placeholder="Enter external link" 
          class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 
            focus:border-indigo-500"></textarea >
        </div>

   
        <div class= "flex justify-end mt-4">
          <button type= "submit"
                  class= "bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-indigo-500 focus:ring-offset-2"
                  >
                  Submit
          </button >
        </div >
      </form >
    </div >
  
  <script src="./views/partials/app.js"></script>

</body>

</html>