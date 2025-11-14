<!DOCTYPE html>
<html class="light" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $pageTitle ?? 'JF Informática e Games' ?></title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: "#005A9C",
                    "background-light": "#EBF2FA",
                    "background-dark": "#101922",
                    "secondary-light": "#F0F2F5",
                    "secondary-dark": "#1a242f",
                    "text-light": "#333333",
                    "text-dark": "#e5e7eb",
                    "text-muted-light": "#555555",
                    "text-muted-dark": "#9ca3af",
                    "border-light": "#e0e4e8",
                    "border-dark": "#374151"
                },
                fontFamily: {
                    display: ["Inter", "sans-serif"]
                },
                borderRadius: {
                    DEFAULT: "0.25rem",
                    lg: "0.5rem",
                    xl: "0.75rem",
                    full: "9999px"
                },
            },
        },
    }
    </script>
</head>