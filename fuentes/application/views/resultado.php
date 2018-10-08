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
        <h1>Resultados</h1>
    </div>
    <div class="container">
        <!-- Menu -->
        <?php //$this->load->view('comunes/menu')?>
    </div>
    </br>
    <?php
        if(!empty($datos)){
            $html = "<ul>";
            foreach($datos as $row) {
                $html .= "<li>";
                $html .= $row;
                $html .= "</li>";
            } 
        }else{
             $html = "Sin resultados.";
        }
        echo $html;
    ?>
    <center>
        <a href="/Inicio">Ir inicio</a>
    </center>
</body>
</html>