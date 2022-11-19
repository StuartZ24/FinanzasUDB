<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php { echo $titulo; } ?></title>
        <link rel="icon" type="image/x-icon" href="../props/assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../props/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../props/css/card.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <?php if (($titulo == 'Finanzas - Entradas') || ($titulo == 'Finanzas - Salidas')) { ?>
        <!-- Sweet Alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php } ?>
</head>