<?php $pageTitle = 'Historial clínico'; $activePage = 'historial.php'; require __DIR__ . '/includes/header.php'; ?>
<div class="mb-4"><h1 class="h3 mb-1 text-gray-800">Historial clínico</h1><p class="page-intro">Registro de consultas para dar seguimiento a la atención del paciente.</p></div>
<div class="card shadow mb-4"><div class="card-header py-3 d-flex justify-content-between align-items-center"><h6 class="m-0 font-weight-bold text-primary">Consultas recientes</h6><span class="small text-muted">Registro de demostración</span></div><div class="card-body"><div class="table-responsive"><table class="table table-bordered table-hover"><thead class="thead-light"><tr><th>Fecha</th><th>Paciente</th><th>Especialidad</th><th>Doctor</th><th>Tipo de visita</th><th>Notas</th></tr></thead><tbody>
<tr><td>06 nov 2026</td><td>Ana Martínez</td><td>Cardiología</td><td>Dr. Luis Gómez</td><td>Seguimiento</td><td>Control de presión arterial</td></tr>
<tr><td>04 nov 2026</td><td>Carlos Rodríguez</td><td>Dermatología</td><td>Dra. Elena Pérez</td><td>Consulta general</td><td>Evaluación de rutina</td></tr>
<tr><td>01 nov 2026</td><td>Laura García</td><td>Pediatría</td><td>Dr. Miguel Torres</td><td>Primera visita</td><td>Chequeo pediátrico</td></tr>
<tr><td>28 oct 2026</td><td>José Peña</td><td>Medicina interna</td><td>Dra. Sofía Díaz</td><td>Seguimiento</td><td>Revisión de resultados</td></tr>
</tbody></table></div><div class="alert alert-info mb-0 small"><i class="fas fa-info-circle mr-2"></i>Los registros mostrados son ficticios y no contienen información clínica real.</div></div></div>
<?php require __DIR__ . '/includes/footer.php'; ?>
