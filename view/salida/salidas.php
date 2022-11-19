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
                        <h1 class="mt-4">Salidas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard_controller.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Salidas</li>
                        </ol>
                        <div class="d-flex justify-content-end pb-4" >
                            <?php $add = base64_encode('crear') ?>
                            <a class="btn btn-primary" href="?action=<?php echo $add ?>" role="button">Agregar Salidas</a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa-regular fa-square-caret-right me-1"></i>
                                Salidas
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Monto</th>
                                            <th>Fecha</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Comida Mensual</td>
                                            <td>$500</td>
                                            <td>29/10/2022</td>
                                            <td>
                                                <?php $gd = base64_encode('get_datos') ?>
                                                <?php $id = base64_encode(1) ?>
                                                <a class="btn btn-success" href="?action=<?php echo $gd ?>&id=<?php echo $id ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                                <button type="button" class="btn btn-danger" onclick="eliminarRegistro()"><i class="fa-solid fa-trash"></i> Eliminar</button>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>Comida Mensual</td>
                                            <td>$500</td>
                                            <td>29/10/2022</td>
                                            <td>
                                                <?php $gd = base64_encode('get_datos') ?>
                                                <?php $id = base64_encode(1) ?>
                                                <a class="btn btn-success" href="?action=<?php echo $gd ?>&id=<?php echo $id ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                                <button type="button" class="btn btn-danger" onclick="eliminarRegistro()"><i class="fa-solid fa-trash"></i> Eliminar</button>
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td>Comida Mensual</td>
                                            <td>$500</td>
                                            <td>29/10/2022</td>
                                            <td>
                                                <?php $gd = base64_encode('get_datos') ?>
                                                <?php $id = base64_encode(1) ?>
                                                <a class="btn btn-success" href="?action=<?php echo $gd ?>&id=<?php echo $id ?>" role="button"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                                <button type="button" class="btn btn-danger" onclick="eliminarRegistro()"><i class="fa-solid fa-trash"></i> Eliminar</button>
                                            </td>
                                        </tr>                                                                                                                                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require '../view/layout/footer.php'; ?>
            </div>
        </div>
        <?php require '../view/layout/scripts.php'; ?>
        <script>
            function eliminarRegistro() {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                    '¡Eliminado!',
                    'El registro ha sido eliminado.',
                    'success'
                    )
                }
                })
            }
        </script>
</html>
