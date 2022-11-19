<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../props/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../props/js/datatables-simple-demo.js"></script>
<?php if ($titulo == 'Finanzas - Dashboard') { ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../props/assets/demo/chart-pie-demo.js"></script>
<?php } else if (($titulo == 'Finanzas - Entradas - Crear') || ($titulo == 'Finanzas - Entradas - Editar')) { ?>
<script src="../props/js/entradasValidation.js"></script>
<?php } else if (($titulo == 'Finanzas - Salidas - Crear') || ($titulo == 'Finanzas - Salidas - Editar')) { ?>
<script src="../props/js/salidasValidation.js"></script>
<?php } else if ($titulo == 'Finanzas - Balance') { ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../props/assets/demo/chart-pie-demo.js"></script>
<script src="../props/js/balanceValidation.js"></script>
<?php } ?>