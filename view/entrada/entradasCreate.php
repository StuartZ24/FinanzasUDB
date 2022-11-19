<!DOCTYPE html>
<html lang="es">
    <?php require '../view/layout/header.php'; ?>
    <body class="sb-nav-fixed">
        <?php require '../view/layout/navbar.php'; ?>
        <div id="layoutSidenav">
            <?php require '../view/layout/sidenav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Crear Entradas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard_controller.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="entrada_controller.php">Entradas</a></li>
                            <li class="breadcrumb-item active">Crear Entradas</li>
                        </ol>
                        <div class="row">
                            <div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fa-regular fa-square-caret-right me-1"></i>
                                        Crear Entradas
                                    </div>
                                    <div class="card-body" >
                                        <form class="g-3 needs-validation" novalidate>
                                        <div class="mb-3">
                                            <label for="tipoEntrada" class="form-label">Tipo de Entrada</label>
                                            <input type="text" class="form-control" id="tipoEntrada" placeholder="Tipo de Entrada" required>
                                            <div class="invalid-feedback">
                                                Tipo de Entrada es requerido
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="montoEntrada" class="form-label">Monto</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="number" class="form-control" id="montoEntrada" placeholder="Monto" required>
                                                <div class="invalid-feedback">
                                                    Monto es requerido
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="mb-3">
                                            <label for="fechaEntrada" class="form-label">Fecha de Entrada</label>
                                            <input type="date" class="form-control" id="fechaEntrada" placeholder="Fecha de Entrada" required>
                                            <div class="invalid-feedback">
                                                Fecha de Entrada es requerido
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="facturaEntrada" class="form-label">Factura</label>
                                            <input class="form-control" type="file" id="facturaEntrada" required>
                                            <div class="invalid-feedback">
                                                Factura es requerida
                                            </div>
                                        </div>
                                        <a class="btn  btn-outline-primary" href="entrada_controller.php" role="button">Regresar</a>
                                        <button type="submit" class="btn btn-primary">Agregar</button>
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
