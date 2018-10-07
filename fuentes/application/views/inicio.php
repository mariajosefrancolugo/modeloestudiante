<!DOCTYPE html>
<html>
<head>
    <title>Test modelos de estudiante</title>

    <!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera')?>
</head>
<body>
    </br>
    <div class="container cabecera">
        <h1>Test modelos de estudiante</h1>
    </div>
    <div class="container">
        <!-- Menu -->
        <?php //$this->load->view('comunes/menu')?>
    </div>
    </br>
    </br>
    <div class="container">
        <center>
            <div class="btn-group">
                <a href="/TestFelderSilverman" class="btn btn-primary active">
                    <i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i> Test Felder-Silverman
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/TestHowardGardner" class="btn btn-primary active">
                    <i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i> Test inteligencias m&uacute;ltiples de Howard Gardner
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/TestPersonalidadEysenck" class="btn btn-primary active">
                    <i class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></i> Test de personalidad Eysenck
                </a>
            </div>
        </center>
    </div>
    <!-- Pie de pagina -->
    <?php $this->load->view('comunes/pie_pagina')?>
</body>
</html>
