<?php
function renderCard($icon, $title, $description, $btnPrimaryText = null, $btnPrimaryLink = 'www.google.com.br', $btnSecondaryText = null, $btnSecondaryLink = '#')
{
?>
<div
    class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6 transition-shadow hover:shadow-lg">

    <!-- Ícone + Título -->
    <div class="flex items-center gap-4">
        <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10 text-primary">
            <span class="material-symbols-outlined"><?= $icon ?></span>
        </div>
        <h3 class="text-lg font-bold"><?= $title ?></h3>
    </div>

    <!-- Descrição -->
    <p class="text-sm text-text-muted-light dark:text-text-muted-dark">
        <?= $description ?>
    </p>

    <!-- Botões -->
    <div class="flex flex-col mt-auto space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">


        <a href="<?= $btnPrimaryLink ?>"
            class="w-full px-4 py-2 text-sm font-semibold text-white rounded-lg bg-primary hover:bg-primary/90 text-center">
            <?= $btnPrimaryText ?>
        </a>


        <?php if ($btnSecondaryText): ?>
        <a href="<?= $btnSecondaryLink ?>"
            class="w-full px-4 py-2 text-sm font-semibold border rounded-lg text-primary border-primary/50 hover:bg-primary/10 text-center">
            <?= $btnSecondaryText ?>
        </a>
        <?php endif; ?>

    </div>
</div>
<?php
}