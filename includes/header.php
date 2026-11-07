<?php
$pageTitle = $pageTitle ?? 'Panel';
$activePage = $activePage ?? basename($_SERVER['PHP_SELF']);
$navItems = [
    ['index.php', 'fa-tachometer-alt', 'Resumen'],
    ['citas.php', 'fa-calendar-check', 'Citas'],
    ['agendar.php', 'fa-calendar-plus', 'Agendar cita'],
    ['pacientes.php', 'fa-users', 'Pacientes'],
    ['doctores.php', 'fa-user-md', 'Doctores'],
    ['historial.php', 'fa-file-medical-alt', 'Historial clínico'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panel administrativo MediCitas para la gestión de una clínica médica.">
    <title>MediCitas - Panel Administrativo | <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/medicitas.css" rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon"><i class="fas fa-heartbeat"></i></div>
            <div class="sidebar-brand-text mx-2">MediCitas</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item <?= $activePage === 'index.php' ? 'active' : '' ?>">
            <a class="nav-link" href="index.php"><i class="fas fa-fw fa-tachometer-alt"></i><span>Resumen</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">Gestión médica</div>
        <?php foreach (array_slice($navItems, 1) as [$url, $icon, $label]): ?>
        <li class="nav-item <?= $activePage === $url ? 'active' : '' ?>">
            <a class="nav-link" href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>"><i class="fas fa-fw <?= htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') ?>"></i><span><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></span></a>
        </li>
        <?php endforeach; ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">Sistema</div>
        <li class="nav-item <?= $activePage === 'ayuda.php' ? 'active' : '' ?>"><a class="nav-link" href="ayuda.php"><i class="fas fa-fw fa-question-circle"></i><span>Centro de ayuda</span></a></li>
        <li class="nav-item <?= $activePage === 'configuracion.php' ? 'active' : '' ?>"><a class="nav-link" href="configuracion.php"><i class="fas fa-fw fa-cog"></i><span>Configuración</span></a></li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline"><button class="rounded-circle border-0" id="sidebarToggle" aria-label="Contraer menú"></button></div>
        <div class="sidebar-card d-none d-lg-flex"><div class="text-center mb-2"><i class="fas fa-clinic-medical fa-2x"></i></div><p class="text-center mb-0"><strong>Clínica Salud Integral</strong><br>Santo Domingo, RD</p></div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" aria-label="Abrir menú"><i class="fa fa-bars"></i></button>
                <div class="d-none d-sm-inline-block text-gray-600 small">Clínica Salud Integral <span class="mx-2">/</span> <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell fa-fw"></i><span class="badge badge-danger badge-counter">3</span></a>
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown"><h6 class="dropdown-header">Notificaciones</h6><a class="dropdown-item d-flex align-items-center" href="citas.php"><div class="mr-3"><div class="icon-circle bg-primary"><i class="fas fa-calendar-check text-white"></i></div></div><div><div class="small text-gray-500">Hoy</div><span class="font-weight-bold">Hay citas próximas por confirmar</span></div></a><a class="dropdown-item text-center small text-gray-500" href="citas.php">Ver agenda</a></div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow"><a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-2 d-none d-lg-inline text-gray-600 small">Dra. Andrea Rivera</span><span class="avatar-circle">AR</span></a><div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"><span class="dropdown-item-text small text-gray-600">Administradora</span><div class="dropdown-divider"></div><a class="dropdown-item" href="configuracion.php"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Configuración</a></div></li>
                </ul>
            </nav>
            <main class="container-fluid">
