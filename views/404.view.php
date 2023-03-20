<?php require("./views/partials/head.php") ?>

<body class="bg-blue-200">
    
    <?php include('./views/partials/nav.php'); ?>
    <section class="overlay"></section>

    <div class="flex items-center justify-center max-w-md mx-auto p-4 bg-gray-100 rounded-lg shadow-lg sm:max-w-sm md:max-w-lg lg:max-w-xl mt-20 ">
        <div class="text-center">
            <h1 class="text-6xl font-bold text-gray-900">404</h1>
            <h2 class="text-3xl font-bold text-gray-900">Page Not Found</h2>
            <p class="mt-4 text-gray-600">Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
            <a href="/" class="mt-8 inline-block px-6 py-4 text-white font-bold bg-blue-500 rounded-lg hover:bg-blue-700">Go back to the homepage</a>
        </div>
    </div>
    
    <script src="./views/partials/app.js"></script>

</body>


</html>