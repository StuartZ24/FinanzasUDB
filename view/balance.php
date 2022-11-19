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
                        <h1 class="mt-4">Balance</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard_controller.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Balance</li>
                        </ol>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Generar Balance
                            </a>
                          </p>
                          <div class="collapse mb-4" id="collapseExample">
                            <div class="card card-body">
                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-12 col-md-6">
                                        <label for="fechaInicio" class="form-label">Fecha Inicial</label>
                                        <input type="date" class="form-control" id="fechaInicio" placeholder="Fecha Inicial" required>
                                        <div class="invalid-feedback">
                                            Fecha Inicial es requerido
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="fechaFinal" class="form-label">Fecha Final</label>
                                        <input type="date" class="form-control" id="fechaFinal" placeholder="Fecha Final" required>
                                        <div class="invalid-feedback">
                                            Fecha Final es requerido
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Generar Reporte</button>
                                    </div>
                                </form>
                            </div>
                          </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa-regular fa-square-caret-right me-1"></i>
                                        Entradas
                                    </div>
                                    <div class="card-body">
                                        <table id="datatablesBalance1">
                                            <thead>
                                                <tr>
                                                    <th>Tipo</th>
                                                    <th>Monto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sueldo del Mes</td>
                                                    <td>$500</td>
                                                </tr>                                        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa-regular fa-square-caret-left me-1"></i>
                                        Salidas
                                    </div>
                                    <div class="card-body">
                                        <table id="datatablesBalance2">
                                            <thead>
                                                <tr>
                                                    <th>Tipo</th>
                                                    <th>Monto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Comida Mensual</td>
                                                    <td>$500</td>
                                                </tr>
                                                <tr>
                                                    <td>Comida Mensual</td>
                                                    <td>$500</td>
                                                </tr>                                      
                                                <tr>
                                                    <td>Comida Mensual</td>
                                                    <td>$500</td>
                                                </tr>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Entradas vs Salidas
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
</html>
