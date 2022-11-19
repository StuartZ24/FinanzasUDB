<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="dashboard_controller.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="entrada_controller.php">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-square-caret-right"></i></div>
                    Entradas
                </a>
                <a class="nav-link" href="salida_controller.php">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-square-caret-left"></i></div>
                    Salidas
                </a>
                <a class="nav-link" href="balance_controller.php">
                    <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-scale-balanced"></i></i></div>
                    Balance
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Conectado como:</div>
            <?php { echo $_SESSION["username"]; } ?>
        </div>
    </nav>
</div>