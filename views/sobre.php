<?php
$pageTitle = "Sobre Nós - JF Informática e Games";
require "../components/head.php";
require "../components/header.php";
?>

<main class="flex w-full flex-1 flex-col items-center py-10 sm:py-16">
    <div class="layout-content-container flex w-full max-w-6xl flex-col gap-10 px-4 sm:px-6 sm:gap-16">

        <!-- SEÇÃO INTRO -->
        <div class="flex flex-col items-center gap-10 lg:flex-row lg:gap-12">
            <div class="w-full flex-1">
                <div class="aspect-video w-full rounded-xl bg-cover bg-center bg-no-repeat"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA7tLFBERqM084dRWx62paWCTjb6HEKvczrW8kwOkWBD-lZ4YCo_asMKhSolI1v4SJSZAzEvNPs8EKcWvonQyN-CevmKygTUBdInb2uVYGpFiNQyn6Z0mBcfLY5mFH9iGBtIWqis9DrdzmlArKFbJKrJqHFDxoifhNlpuwQEbSGX7W7_9keIb1-lONSfVPYT7wKI6sGSGFIGWjitvitQB6aELVTQYQFCTaX1hlAA4GnxIUet3_Hg0L--KZQ_D2AU_pghg4eNYDZPHbE");'>
                </div>
            </div>

            <div class="flex flex-1 flex-col gap-6 text-left lg:justify-center">
                <div class="flex flex-col gap-4">
                    <h1 class="text-4xl font-black leading-tight tracking-tighter md:text-5xl">
                        Nossa Paixão por Tecnologia
                    </h1>
                    <p class="text-base font-normal leading-relaxed text-text-muted-light dark:text-text-muted-dark">
                        Conheça a história da JF Informática e Games, nosso compromisso com a qualidade e a paixão em
                        oferecer as melhores e mais ágeis soluções técnicas para nossos clientes, desde a manutenção de
                        computadores e videogames até o suporte especializado que você precisa.
                    </p>
                </div>
            </div>
        </div>

        <!-- MISSÃO / VISÃO / VALORES -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

            <!-- MISSÃO -->
            <div
                class="flex flex-1 flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary/20 text-primary">
                    <span class="material-symbols-outlined !text-3xl">target</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-lg font-bold">Missão</h2>
                    <p class="text-sm font-normal leading-relaxed text-text-muted-light dark:text-text-muted-dark">
                        Oferecer soluções de assistência técnica com agilidade e excelência, garantindo a satisfação e
                        confiança dos nossos clientes em cada serviço prestado.
                    </p>
                </div>
            </div>

            <!-- VISÃO -->
            <div
                class="flex flex-1 flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary/20 text-primary">
                    <span class="material-symbols-outlined !text-3xl">visibility</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-lg font-bold">Visão</h2>
                    <p class="text-sm font-normal leading-relaxed text-text-muted-light dark:text-text-muted-dark">
                        Ser a referência em suporte técnico na região, reconhecida pela inovação e qualidade no
                        atendimento, superando as expectativas de cada cliente atendido.
                    </p>
                </div>
            </div>

            <!-- VALORES -->
            <div
                class="flex flex-1 flex-col gap-4 rounded-xl border border-border-light dark:border-border-dark bg-secondary-light dark:bg-secondary-dark p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary/20 text-primary">
                    <span class="material-symbols-outlined !text-3xl">favorite</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-lg font-bold">Valores</h2>
                    <p class="text-sm font-normal leading-relaxed text-text-muted-light dark:text-text-muted-dark">
                        Compromisso com a qualidade, transparência em cada diagnóstico, agilidade na entrega dos
                        serviços e paixão por tecnologia.
                    </p>
                </div>
            </div>

        </div>
    </div>
</main>

<?php require "../components/footer.php"; ?>
</body>

</html>