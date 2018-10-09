<!DOCTYPE html>
<html>
<head>
    <title>Test modelos de estudiante</title>

    <!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera')?>
</head>
<body>
    </br>
    <div class="container cabecera my-5">
        <h1>Test modelos de estudiante</h1>
    </div>
    <div class="container">
        <!-- Menu -->
        <?php //$this->load->view('comunes/menu')?>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <a href="/TestFelderSilverman" class="btn btn-primary btn-block" role="button" aria-pressed="true">Test Felder-Silverman</a>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-md-12">
                <a href="/TestHowardGardner" class="btn btn-primary btn-block" role="button" aria-pressed="true">Test Howard Gardner</a>
            </div>
        </div> 
        </br>
        <div class="row">
            <div class="col-md-12">
            <a href="/TestPersonalidadEysenck" class="btn btn-primary btn-block" role="button" aria-pressed="true">Test Eysenck</a>
            </div>
        </div>
    </div>
    <!-- Pie de pagina -->
    <?php $this->load->view('comunes/pie_pagina')?>
</body>
</html>
