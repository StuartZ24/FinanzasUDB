<!DOCTYPE html>
<html lang="es">
    <?php require 'layout/header.php'; ?>
    <body class="sb-nav-fixed">
        <?php require 'layout/navbar.php'; ?>
        <div id="layoutSidenav">
            <?php require 'layout/sidenav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <!-- Header-->
                        <header>
                            <div class="container">
                                <div class="p-4 bg-light rounded-3 text-center">
                                    <div class="m-4 m-lg-5">
                                        <h1 class="display-5 fw-bold">Bienvenido!</h1>
                                        <p class="fs-4"><?php { echo $_SESSION["username"]; } ?></p>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Call to Action-->
                        <div class="py-4">
                            <div class="card text-white bg-secondary text-center">
                                <div class="card-body"><p class="text-white m-0 fw-bold">Saldo Disponible: $<?php { echo $_SESSION["saldo"]; } ?></p></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <i class="fa-solid fa-money-bill-transfer me-1"></i>
                                Costos del mes
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between">Total Entradas: <span class="badge rounded-pill bg-success">$6500.00</span></li>
                                    <li class="list-group-item d-flex justify-content-between">Total Salidas: <span class="badge rounded-pill bg-danger">$1500.00</span></li>
                                    <li class="list-group-item d-flex justify-content-between">Balance: <span class="badge rounded-pill bg-success">$5000.00</span></li>
                                </ul>                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-box bg-info">
                                    <div class="inner">
                                        <h3> 16 </h3>
                                        <p> Total Movimientos </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-money-bill-transfer" aria-hidden="true"></i>
                                    </div>
                                    <a href="balance_controller.php" class="card-box-footer">Mostrar Balance <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-box bg-success">
                                    <div class="inner">
                                        <h3> 13 </h3>
                                        <p> Total Entradas </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-regular fa-square-caret-right" aria-hidden="true"></i>
                                    </div>
                                    <a href="entrada_controller.php" class="card-box-footer">Ver Más <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-box bg-danger">
                                    <div class="inner">
                                        <h3> 3 </h3>
                                        <p> Total Salidas </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-regular fa-square-caret-left" aria-hidden="true"></i>
                                    </div>
                                    <a href="salida_controller.php" class="card-box-footer">Ver Más <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Entradas vs Salidas <span class="badge bg-info">(Mes Actual)</span>
                                    </div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="30"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require 'layout/footer.php'; ?>
            </div>
        </div>
        <?php require 'layout/scripts.php'; ?>
    </body>
</html>
