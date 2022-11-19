<!DOCTYPE html>
<html lang="en">
    <?php require '../view/layout/header.php'; ?>
    <body class="sb-nav-fixed">
        <?php require '../view/layout/navbar.php'; ?>
        <div id="layoutSidenav">
            <?php require '../view/layout/sidenav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Editar Salidas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard_controller.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="salida_controller.php">Salidas</a></li>
                            <li class="breadcrumb-item active">Editar Salidas</li>
                        </ol>
                        <div class="row">
                            <div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa-regular fa-square-caret-right me-1"></i>
                                        Editar Entradas
                                    </div>
                                    <div class="card-body" >
                                        <form class="g-3 needs-validation" novalidate>
                                            <div class="mb-3">
                                                <label for="tipoSalida" class="form-label">Tipo de Salida</label>
                                                <input type="text" class="form-control" id="tipoSalida" placeholder="Tipo de Salida" value="Comida Mensual" required>
                                                <div class="invalid-feedback">
                                                    Tipo de Salida es requerido
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="montoSalida" class="form-label">Monto</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">$</span>
                                                    <input type="number" class="form-control" id="montoSalida" placeholder="Monto" value="500" required>
                                                    <div class="invalid-feedback">
                                                        Monto es requerido
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="fechaSalida" class="form-label">Fecha de Salida</label>
                                                <input type="date" class="form-control" id="fechaSalida" placeholder="Fecha de Salida" value="2022-10-29" required>
                                                <div class="invalid-feedback">
                                                    Fecha de Salida es requerido
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="facturaSalida" class="form-label">Factura</label>
                                                <input class="form-control" type="file" id="facturaSalida" required>
                                                <div class="invalid-feedback">
                                                    Factura es requerida
                                                </div>
                                            </div>
                                            <a class="btn  btn-outline-primary" href="salida_controller.php" role="button">Regresar</a>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require '../view/layout/footer.php'; ?>
            </div>
        </div>
        <?php require '../view/layout/scripts.php'; ?>
</html>