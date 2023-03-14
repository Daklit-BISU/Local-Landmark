<?php require("./views/partials/head.php") ?>

<section class="overlay"></section>

<body>

    <?php include('./views/partials/nav.php'); ?>
    <main>
        <div class="absolute top-100    ">
            <!-- Your content -->
            <h1 class="absolute inset-x-0 top-100 h-16 text-2xl font-bold">
                404 Not Found
            </h1>
            <p class="mt-4">
                Page does not exist<br>
                <a href="/" class="text-blue-500 hover:underline">
                    Return to the homepage
                </a>
            </p>
        </div>
    </main>
</body>

<?php include('./views/partials/nav.php'); ?>

<script src="./views/partials/app.js"></script>

<?php include('./views/partials/icons.php'); ?>

</html>