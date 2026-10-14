<?php
declare(strict_types=1);

$nombreSistema = 'Nexora Business';
$eslogan = 'Todo tu negocio en un solo lugar.';
$version = '1.0.0';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($nombreSistema) ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="navbar">
        <a class="brand" href="index.php">
            <span class="brand-icon">N</span>
            <span>NEXORA <small>BUSINESS</small></span>
        </a>
        <span class="status">
            <span class="status-dot"></span>
            Sistema en desarrollo
        </span>
    </header>

    <main class="container">
        <section class="hero">
            <span class="eyebrow">PLATAFORMA DE GESTIÓN EMPRESARIAL</span>

            <h1>Controla tu negocio.<br>
                <span>Impulsa su crecimiento.</span>
            </h1>

            <p class="description">
                Organiza tus productos, controla tus existencias
                y prepara tu negocio para una gestión más eficiente.
            </p>

            <div class="actions">
                <a class="button-primary" href="#modulos">
                    Explorar módulos <span aria-hidden="true">→</span>
                </a>
                <span class="version">Versión <?= htmlspecialchars($version) ?></span>
            </div>
        </section>

        <section class="modules" id="modulos">
            <article class="module-card">
                <div class="module-icon">▦</div>
                <h2>Inventario</h2>
                <p>Control de productos, existencias y movimientos.</p>
                <span class="module-label">Módulo planificado</span>
            </article>

            <article class="module-card">
                <div class="module-icon">↗</div>
                <h2>Ventas</h2>
                <p>Registro de operaciones y consulta de ventas.</p>
                <span class="module-label">Módulo planificado</span>
            </article>

            <article class="module-card">
                <div class="module-icon">▤</div>
                <h2>Reportes</h2>
                <p>Información organizada para tomar decisiones.</p>
                <span class="module-label">Módulo planificado</span>
            </article>
        </section>

        <footer class="footer">
            <span><?= htmlspecialchars($nombreSistema) ?></span>
            <span><?= htmlspecialchars($eslogan) ?></span>
        </footer>
    </main>
</body>
</html>