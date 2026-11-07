<?php
$pageTitle = $pageTitle ?? 'Panel';
$activePage = $activePage ?? '';
$navItems = [
  ['index.php', '⌂', 'Resumen'], ['citas.php', '▦', 'Citas'], ['agendar.php', '＋', 'Agendar cita'],
  ['pacientes.php', '♙', 'Pacientes'], ['doctores.php', '✚', 'Doctores'], ['historial.php', '▤', 'Historial clínico'],
];
?>
<!doctype html><html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="Panel de administración MediCitas para gestionar citas médicas, pacientes y doctores."><title>MediCitas - Panel Administrativo | <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title><link rel="stylesheet" href="assets/css/style.css"></head><body>
<aside class="sidebar"><a class="brand" href="index.php"><span class="brand-mark">✚</span><span>Medi<span>Citas</span><small>ADMINISTRACIÓN</small></span></a><div class="clinic"><span class="clinic-icon">✚</span><span><b>Clínica Salud Integral</b><small>Santo Domingo, RD</small></span><span class="dots">···</span></div><div class="nav-label">MENÚ PRINCIPAL</div><nav><?php foreach ($navItems as [$url, $icon, $label]): ?><a class="nav-link <?= $activePage === $url ? 'active' : '' ?>" href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?>"><span class="nav-icon"><?= $icon ?></span><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?><?php if ($url === 'citas.php'): ?><span class="nav-count">8</span><?php endif; ?></a><?php endforeach; ?></nav><div class="sidebar-bottom"><a class="nav-link" href="ayuda.php"><span class="nav-icon">?</span>Centro de ayuda</a><a class="nav-link" href="configuracion.php"><span class="nav-icon">⚙</span>Configuración</a><div class="profile"><span class="avatar">DR</span><span><b>Dra. Andrea Rivera</b><small>Administradora</small></span><span class="dots">···</span></div></div></aside>
