<?php require("./views/partials/head.php") ?>

<section class="overlay"></section>

<body>

    <?php include('./views/partials/nav.php'); ?>

    <main>
        <div class=" mx-auto max-w-7xl py-6 sm:px-6 lg:px-7">
            <!-- Your content -->
            <h1 class="absolute top-0 text-2xl font-bold">
                403 Forbidden Error
            </h1>
            <p class="mt-4">
                You are not authorize to view this page<br>
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