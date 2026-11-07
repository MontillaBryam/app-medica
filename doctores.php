<?php $pageTitle = 'Doctores'; $activePage = 'doctores.php'; require __DIR__ . '/includes/header.php'; ?>
<div class="mb-4"><h1 class="h3 mb-1 text-gray-800">Equipo médico</h1><p class="page-intro">Especialistas y disponibilidad de la Clínica Salud Integral.</p></div>
<div class="row">
<?php $doctors = [
    ['LG','Dr. Luis Gómez','Cardiología','Consultorio 2','Disponible','success','bg-soft-primary','fa-heartbeat'],
    ['EP','Dra. Elena Pérez','Dermatología','Consultorio 4','En consulta','warning','bg-soft-danger','fa-allergies'],
    ['MT','Dr. Miguel Torres','Pediatría','Consultorio 1','Disponible','success','bg-soft-success','fa-baby'],
    ['SD','Dra. Sofía Díaz','Medicina interna','Consultorio 3','En consulta','warning','bg-soft-info','fa-stethoscope'],
    ['RV','Dr. Rafael Vargas','Oftalmología','Consultorio 5','Disponible','success','bg-soft-warning','fa-eye'],
    ['MC','Dra. María Cruz','Ginecología','Consultorio 6','Disponible','success','bg-soft-primary','fa-user-md'],
]; foreach ($doctors as [$initials,$name,$specialty,$office,$status,$badge,$color,$icon]): ?>
<div class="col-xl-4 col-md-6 mb-4"><div class="card shadow h-100"><div class="card-body"><div class="d-flex align-items-center mb-3"><span class="doctor-avatar <?= $color ?> mr-3"><i class="fas <?= $icon ?>"></i></span><div><h6 class="mb-1 font-weight-bold text-gray-800"><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></h6><div class="small text-primary"><?= htmlspecialchars($specialty, ENT_QUOTES, 'UTF-8') ?></div></div></div><div class="small text-gray-600 mb-3"><i class="fas fa-door-open mr-2 text-gray-400"></i><?= htmlspecialchars($office, ENT_QUOTES, 'UTF-8') ?></div><span class="badge badge-<?= $badge ?>"><i class="fas fa-circle fa-xs mr-1"></i><?= htmlspecialchars($status, ENT_QUOTES, 'UTF-8') ?></span></div></div></div>
<?php endforeach; ?>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
