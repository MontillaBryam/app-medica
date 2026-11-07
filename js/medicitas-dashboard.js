(function () {
    if (typeof Chart === 'undefined') return;
    var area = document.getElementById('appointmentsChart');
    if (area) {
        new Chart(area, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
                datasets: [{
                    label: 'Citas',
                    data: [18, 25, 21, 30, 26, 34, 24],
                    backgroundColor: 'rgba(23,121,138,.08)',
                    borderColor: '#17798a',
                    pointBackgroundColor: '#17798a',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#14515f',
                    pointHoverBorderColor: '#14515f',
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: { display: false },
                scales: {
                    xAxes: [{ gridLines: { display: false }, ticks: { maxTicksLimit: 7 } }],
                    yAxes: [{ ticks: { beginAtZero: true, maxTicksLimit: 5, padding: 10 }, gridLines: { color: 'rgb(234,236,244)', zeroLineColor: 'rgb(234,236,244)', drawBorder: false, borderDash: [2], zeroLineBorderDash: [2] } }]
                },
                tooltips: { backgroundColor: 'rgb(255,255,255)', bodyFontColor: '#858796', titleMarginBottom: 10, titleFontColor: '#6e707e', titleFontSize: 14, borderColor: '#dddfeb', borderWidth: 1, xPadding: 15, yPadding: 15, displayColors: false, intersect: false, mode: 'index', caretPadding: 10 }
            }
        });
    }
    var pie = document.getElementById('specialtyChart');
    if (pie) {
        new Chart(pie, {
            type: 'doughnut',
            data: {
                labels: ['Cardiología', 'Pediatría', 'Otras'],
                datasets: [{ data: [35, 25, 40], backgroundColor: ['#17798a', '#1cc88a', '#36b9cc'], hoverBackgroundColor: ['#126272', '#17a673', '#2c9faf'], hoverBorderColor: 'rgba(234,236,244,1)' }]
            },
            options: { maintainAspectRatio: false, tooltips: { backgroundColor: 'rgb(255,255,255)', bodyFontColor: '#858796', borderColor: '#dddfeb', borderWidth: 1, xPadding: 15, yPadding: 15, displayColors: false, caretPadding: 10 }, legend: { display: false }, cutoutPercentage: 72 }
        });
    }
})();
