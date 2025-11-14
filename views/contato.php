<?php
$pageTitle = "Contato - JF Informática e Games";
include "../components/head.php";
?>

<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-display">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">

        <?php include "../components/header.php"; ?>

        <main class="flex-grow">
            <div class="container mx-auto px-4 py-16 sm:py-24">

                <!-- PageHeading -->
                <div class="mb-12 text-center">
                    <h1 class="text-4xl font-black leading-tight tracking-[-0.033em] md:text-5xl">
                        Fale Conosco
                    </h1>
                    <p class="mt-3 text-base md:text-lg text-text-subtle-light dark:text-text-subtle-dark">
                        Estamos prontos para ajudar. Envie sua mensagem ou nos encontre.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16">

                    <!-- Formulário -->
                    <div class="flex flex-col gap-6 rounded-xl bg-secondary-light dark:bg-secondary-dark p-6 sm:p-8">
                        <form id="form-orcamento" action="" method="post" class="space-y-4" class="flex flex-col gap-6">

                            <label class="flex flex-col flex-1">
                                <p class="pb-2 font-medium">Nome</p>
                                <input type="text" placeholder="Digite seu nome"
                                    class="h-12 px-4 rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark focus:ring-2 focus:ring-primary/50" />
                            </label>

                            <label class="flex flex-col flex-1">
                                <p class="pb-2 font-medium">Telefone / WhatsApp</p>
                                <input type="tel" placeholder="(XX) XXXXX-XXXX"
                                    class="h-12 px-4 rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark focus:ring-2 focus:ring-primary/50" />
                            </label>

                            <label class="flex flex-col flex-1">
                                <p class="pb-2 font-medium">Descreva seu problema</p>
                                <textarea placeholder="Conte-nos em detalhes o que está acontecendo..."
                                    class="min-h-36 p-4 rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark placeholder:text-text-muted-light dark:placeholder:text-text-muted-dark focus:ring-2 focus:ring-primary/50"></textarea>
                            </label>

                            <button
                                class="w-full rounded-lg bg-primary py-3 px-6 text-white font-bold hover:bg-primary/90 focus:ring-2 focus:ring-primary/50">
                                Enviar Mensagem
                            </button>
                        </form>
                    </div>

                    <!-- Contato rápido + mapa -->
                    <div class="flex flex-col gap-8">

                        <div class="flex flex-col gap-4">
                            <h3 class="text-xl font-bold">Contato Rápido</h3>

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                                <a class="flex items-center justify-center gap-3 rounded-lg bg-secondary-light dark:bg-secondary-dark p-4 hover:bg-primary/10 dark:hover:bg-primary/20"
                                    href="#">
                                    <span class="material-symbols-outlined text-primary">chat</span>
                                    WhatsApp
                                </a>

                                <a class="flex items-center justify-center gap-3 rounded-lg bg-secondary-light dark:bg-secondary-dark p-4 hover:bg-primary/10 dark:hover:bg-primary/20"
                                    href="#">
                                    <span class="material-symbols-outlined text-primary">photo_camera</span>
                                    Instagram
                                </a>

                                <a class="flex items-center justify-center gap-3 rounded-lg bg-secondary-light dark:bg-secondary-dark p-4 hover:bg-primary/10 dark:hover:bg-primary/20"
                                    href="#">
                                    <span class="material-symbols-outlined text-primary">social_leaderboard</span>
                                    Facebook
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <h3 class="text-xl font-bold">Nossa Localização</h3>

                            <div
                                class="aspect-video overflow-hidden rounded-xl border border-border-light dark:border-border-dark">
                                <img class="h-full w-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAUqEQPMOBub3336SPPHyjGIeR0Ix-Wu_5v36mJR4Q6seJsfNU-_D-W1fxEbxFWUAYFHZYhJkcOtIPIkEYzuvtguzPPm_nP0CVVNupU3wXEqogFr97kvitLLvCacpJgJ06ZR5uyuTq38s11dS8nCc9UcA1kVnsZnL6Ndfey07qJ6oZPClkpstgr-LfmBMAY_WdNTjnSd0ZRGmbh-Px1lo_em5juCbLZn89q4veKsxxU2XohUgXQ1Ti3GBWjzz8h482_FsJqne7woCU"
                                    alt="Mapa mostrando a localização da loja">
                            </div>

                            <p class="text-sm text-text-muted-light dark:text-text-muted-dark">
                                Av. Rio Branco, 2000 - Centro, Juiz de Fora - MG, 36015-510
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </main>

        <?php include "../components/footer.php"; ?>

    </div>
</body>

</html>