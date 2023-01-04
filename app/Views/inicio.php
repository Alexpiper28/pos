<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <br>

            <div class="row">
                <div class="col-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <div class="card-body-icon"><i class="fa-solid fa-list"></i></div>
                            <?php echo $total; ?> Total de productos
                        </div>

                        <a class="card-footer text-white" href="<?php echo base_url(); ?>/productos">Ver detalles</a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                        <div class="card-body-icon"><i class="fas fa-shopping-basket"></i></div>
                            <?php echo $totalVentas['total']; ?> Ventas del día
                        </div>

                        <a class="card-footer text-white" href="<?php echo base_url(); ?>/ventas">Ver detalles</a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                        <div class="card-body-icon"><i class="fa-solid fa-list"></i></div>
                            <?php echo $minimos; ?> Productos con stock mínimo 
                        </div>

                        <a class="card-footer text-white" href="<?php echo base_url(); ?>/productos/mostrarMinimos">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <canvas id="myChart"></canvas>
                </div>

                <!-- <div class="col-4">
                    <a href="<?php // echo base_url(); ?>/inicio/excel" class="btn btn-primary">Genera excel</a>

                </div> -->

            </div>
        </div>
    </main>
    
    
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'],
            datasets: [{
                label: 'Ventas de la semana',
                data: [30, 500, 100, 430, 55, 150, 253],
                borderWidth: 1,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(300, 159, 64, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(300, 159, 64, 1)'
                ],
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
</script>