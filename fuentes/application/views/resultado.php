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
        <h1>Resultados</h1>
    </div>
    <div class="container">
        <!-- Menu -->
        <?php $this->load->view('comunes/menu')?>
    </div>
    </br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                <?php
                    if(!empty($datos)){
                        $html = "";
                        foreach($datos as $row) {
                            $html .= '<li class="list-group-item list-group-item-info">';
                            $html .= $row;
                            $html .= '</li>';
                        } 
                    }else{
                         $html = "Sin resultados.";
                    }
                    echo $html;
                ?>
                </ul>
            </div>
        </div>
        </br>
    
</body>
</html>