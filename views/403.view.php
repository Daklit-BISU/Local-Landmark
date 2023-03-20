<?php require("./views/partials/head.php") ?>

    <body class="bg-blue-200">

    <?php include('./views/partials/nav.php'); ?>

        <?php include('./views/partials/nav.php'); ?>
        <section class="overlay"></section>

        <div class="flex items-center justify-center h-screen">
            <div class="text-center">
            <h1 class="text-6xl font-bold text-gray-900">403</h1>
            <h2 class="text-3xl font-bold text-gray-900">Access Denied</h2>
            <p class="mt-4 text-gray-600">Oops! You don't have permission to access this page.</p>
            <a href="/" class="mt-8 inline-block px-6 py-4 text-white font-bold bg-blue-500 rounded-lg hover:bg-blue-700">Go back to the homepage</a>
            </div>
        </div>

        <script src="./views/partials/app.js"></script>
    
    </body>
</html> 