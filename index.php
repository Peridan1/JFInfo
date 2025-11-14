<?php
$pageTitle = "JF Informática e Games - Assistência Técnica";
require 'components/head.php';
?>

<body class="bg-background-light dark:bg-background-dark font-display">
    <?php include 'components/header.php'; ?>

    <main class="flex flex-1 justify-center py-5">
        <div class="w-full max-w-6xl flex flex-col">

            <!-- HERO -->
            <?php include 'components/hero.php'; ?>

            <!-- SERVIÇOS -->
            <?php include 'components/services.php'; ?>

            <!-- DIFERENCIAIS -->
            <?php include 'components/differentials.php'; ?>

            <!-- CTA FINAL -->
            <?php include 'components/cta.php'; ?>

        </div>
    </main>

    <?php include 'components/footer.php'; ?>
</body>

</html>