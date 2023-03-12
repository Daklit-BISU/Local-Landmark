<?php require("./views/partials/head.php")?>

    <?php require("./views/partials/nav.php")?> 
    
    <?php require("./views/partials/banner.php")?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
            <ul>
                <?php foreach ($notes as $note):?>
                    <li class='mx-auto'>
                        <a href="/note?id=<?= $note['id'] ?>" class = "text-blue-500 hover:underline">
                            <?= htmlspecialchars($note['title']) ?>
                        </a>
                    </li>
                <?php endforeach ?>

                <p class="mt-6">
                   <a href="/notes/create" class="text-blue-500 hover:underline">
                        Create note
                    </a>
                </p>

            </ul>
        </div>
    </main>

<?php require("./views/partials/foot.php")?>