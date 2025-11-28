<?php
$pageTitle = "Serviços - JF Informática e Games";
include "../components/head.php";
?>

<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-display">
    <div class="relative flex min-h-screen w-full flex-col">

        <?php include "../components/header.php"; ?>

        <main class="flex flex-1 justify-center w-full">
            <div class="flex flex-col w-full max-w-6xl px-4 py-12 md:py-20">

                <!-- PageHeading -->
                <div class="flex flex-col items-center text-center gap-4 mb-12 md:mb-16">
                    <h1 class="text-4xl md:text-5xl font-black tracking-tighter">
                        Serviços Especializados para Seus Dispositivos
                    </h1>
                    <p class="max-w-2xl text-base md:text-lg text-text-subtle-light dark:text-text-subtle-dark">
                        Conheça nossas soluções em assistência técnica para notebooks, computadores, videogames e muito
                        mais.
                        Confiança e agilidade para o que você precisa.
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- Serviço: Notebooks e PCs -->
                    <?php
                    require '../components/card.php';
                    ?>


                    <?php
                    renderCard(
                        icon: "laptop_chromebook",
                        title: "Notebooks e PCs",
                        description: "Manutenção preventiva, formatação, upgrade de hardware e otimização de desempenho para seu equipamento.",
                        btnPrimaryText: "Solicitar Orçamento",
                        btnPrimaryLink: "orcamento.php",
                        btnSecondaryText: "Saiba Mais",
                        btnSecondaryLink: "servico.php"
                    );
                    ?>



                    <!-- Serviço: Videogames -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6 transition-shadow hover:shadow-lg">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">stadia_controller</span>
                            </div>
                            <h3 class="text-lg font-bold">Videogames</h3>
                        </div>
                        <p class="text-sm text-text-muted-light dark:text-text-muted-dark">
                            Reparo de consoles PlayStation, Xbox e Nintendo, incluindo troca de componentes e solução de
                            problemas de software.
                        </p>
                        <div class="flex flex-col mt-auto space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold text-white rounded-lg bg-primary hover:bg-primary/90">
                                Solicitar Orçamento
                            </button>
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold border rounded-lg text-primary border-primary/50 hover:bg-primary/10">
                                Saiba Mais
                            </button>
                        </div>
                    </div>

                    <!-- Serviço: Controles -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6 transition-shadow hover:shadow-lg">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">sports_esports</span>
                            </div>
                            <h3 class="text-lg font-bold">Controles e Periféricos</h3>
                        </div>
                        <p class="text-sm text-text-muted-light dark:text-text-muted-dark">
                            Conserto de analógicos, botões e conectores para garantir a melhor performance durante seus
                            jogos.
                        </p>
                        <div class="flex flex-col mt-auto space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold text-white rounded-lg bg-primary hover:bg-primary/90">
                                Solicitar Orçamento
                            </button>
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold border rounded-lg text-primary border-primary/50 hover:bg-primary/10">
                                Saiba Mais
                            </button>
                        </div>
                    </div>

                    <!-- Serviço: Monitores -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6 transition-shadow hover:shadow-lg">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">desktop_windows</span>
                            </div>
                            <h3 class="text-lg font-bold">Monitores</h3>
                        </div>
                        <p class="text-sm text-text-muted-light dark:text-text-muted-dark">
                            Reparos em telas, substituição de fontes e consertos de conectores de energia e vídeo.
                        </p>
                        <div class="flex flex-col mt-auto space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold text-white rounded-lg bg-primary hover:bg-primary/90">
                                Solicitar Orçamento
                            </button>
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold border rounded-lg text-primary border-primary/50 hover:bg-primary/10">
                                Saiba Mais
                            </button>
                        </div>
                    </div>

                    <!-- Serviço: Impressoras -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6 transition-shadow hover:shadow-lg">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">print</span>
                            </div>
                            <h3 class="text-lg font-bold">Impressoras</h3>
                        </div>
                        <p class="text-sm text-text-muted-light dark:text-text-muted-dark">
                            Limpeza, desentupimento, manutenção e reparos completos para sua impressora.
                        </p>
                        <div class="flex flex-col mt-auto space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold text-white rounded-lg bg-primary hover:bg-primary/90">
                                Solicitar Orçamento
                            </button>
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold border rounded-lg text-primary border-primary/50 hover:bg-primary/10">
                                Saiba Mais
                            </button>
                        </div>
                    </div>

                    <!-- Serviço: Celulares -->
                    <div
                        class="flex flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6 transition-shadow hover:shadow-lg">
                        <div class="flex items-center gap-4">
                            <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10 text-primary">
                                <span class="material-symbols-outlined">smartphone</span>
                            </div>
                            <h3 class="text-lg font-bold">Celulares (Parceiros)</h3>
                        </div>
                        <p class="text-sm text-text-muted-light dark:text-text-muted-dark">
                            Indicação de parceiros confiáveis para troca de tela, bateria e reparos em geral.
                        </p>
                        <div class="flex flex-col mt-auto space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold text-white rounded-lg bg-primary hover:bg-primary/90">
                                Solicitar Orçamento
                            </button>
                            <button
                                class="w-full px-4 py-2 text-sm font-semibold border rounded-lg text-primary border-primary/50 hover:bg-primary/10">
                                Saiba Mais
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <?php include "../components/footer.php"; ?>

    </div>
</body>

</html>