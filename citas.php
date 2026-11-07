<?php $pageTitle = 'Citas'; $activePage = 'citas.php'; require __DIR__ . '/includes/header.php'; ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4"><div><h1 class="h3 mb-1 text-gray-800">Agenda de citas</h1><p class="page-intro">Consulta el calendario y el estado de las citas médicas.</p></div><a href="agendar.php" class="btn btn-primary shadow-sm page-actions"><i class="fas fa-calendar-plus fa-sm mr-2"></i>Agendar cita</a></div>
<div class="card shadow mb-4"><div class="card-header py-3 d-flex align-items-center justify-content-between"><h6 class="m-0 font-weight-bold text-primary">Citas programadas</h6><span class="small text-muted">Agenda de la clínica</span></div><div class="card-body"><div class="table-responsive"><table class="table table-bordered table-hover" width="100%" cellspacing="0"><thead class="thead-light"><tr><th>Paciente</th><th>Doctor</th><th>Fecha</th><th>Hora</th><th>Especialidad</th><th>Estado</th></tr></thead><tbody>
<tr><td>Ana Martínez</td><td>Dr. Luis Gómez</td><td>06/11/2026</td><td>09:30 a. m.</td><td>Cardiología</td><td><span class="badge badge-success">Confirmada</span></td></tr>
<tr><td>Carlos Rodríguez</td><td>Dra. Elena Pérez</td><td>06/11/2026</td><td>10:00 a. m.</td><td>Dermatología</td><td><span class="badge badge-warning">En espera</span></td></tr>
<tr><td>Laura García</td><td>Dr. Miguel Torres</td><td>06/11/2026</td><td>10:30 a. m.</td><td>Pediatría</td><td><span class="badge badge-success">Confirmada</span></td></tr>
<tr><td>José Peña</td><td>Dra. Sofía Díaz</td><td>06/11/2026</td><td>11:00 a. m.</td><td>Medicina interna</td><td><span class="badge badge-secondary">Pendiente</span></td></tr>
<tr><td>Sofía Martínez</td><td>Dr. Luis Gómez</td><td>06/11/2026</td><td>11:30 a. m.</td><td>Cardiología</td><td><span class="badge badge-success">Confirmada</span></td></tr>
<tr><td>Pedro Castillo</td><td>Dra. Elena Pérez</td><td>06/11/2026</td><td>12:00 p. m.</td><td>Dermatología</td><td><span class="badge badge-success">Confirmada</span></td></tr>
</tbody></table></div><p class="small text-muted mb-0">Los datos de esta agenda son de demostración.</p></div></div>
<?php require __DIR__ . '/includes/footer.php'; ?>
