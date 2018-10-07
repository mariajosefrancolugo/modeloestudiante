<!DOCTYPE html>
<html>
<head>
    <title>Moodlels</title>

    <!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera')?>
</head>
<body>
    </br>
    <div class="container cabecera">
        <h1>Test inteligencias m&uacute;ltiples de Howard Gardner</h1>
    </div>
    <div class="container">
        <!-- Menu -->
        <?php //$this->load->view('comunes/menu')?>
        <br>
    </div>
    <div class="container">
        <form action="testHowardGardner/encuesta" method="post">
            <div class="form-group">
                <label for="p1" class="control-label">1. Prefiero hacer un mapa que explicarle a alguien como tiene que llegar.</label>
                <select class="form-control" name="p1" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p2" class="control-label">2. Si estoy enojado(a) o contento (a) generalmente s&eacute; exactamente por qu&eacute;.</label>
                <select class="form-control" name="p2" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p3" class="control-label">3. S&eacute; tocar (o antes sab&iacute;a tocar) un instrumento musical.</label>
                <select class="form-control" name="p3" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p4" class="control-label">4. Asocio la m&uacute;sica con mis estados de &aacute;nimo.</label>
                <select class="form-control" name="p4" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p5" class="control-label">5. Puedo sumar o multiplicar mentalmente con mucha rapidez.</label>
                <select class="form-control" name="p5" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p6" class="control-label">6. Puedo ayudar a un amigo a manejar sus sentimientos porque yo lo pude hacer antes en
relaci&oacute;n a sentimientos parecidos.</label>
                <select class="form-control" name="p6" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p7" class="control-label">7. Me gusta trabajar con calculadoras y computadores.</label>
                <select class="form-control" name="p7" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p8" class="control-label">8. Aprendo r&aacute;pido a bailar un ritmo nuevo.</label>
                <select class="form-control" name="p8" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p9" class="control-label">9. No me es dif&iacute;cil decir lo que pienso en el curso de una discusi&oacute;n o debate.</label>
                <select class="form-control" name="p9" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p10" class="control-label">10. Disfruto de una buena charla, discurso o serm&oacute;n.</label>
                <select class="form-control" name="p10" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p11" class="control-label">11. Siempre distingo el norte del sur, est&eacute; donde est&eacute;.</label>
                <select class="form-control" name="p11" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p12" class="control-label">12. Me gusta reunir grupos de personas en una fiesta o en un evento especial.</label>
                <select class="form-control" name="p12" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p13" class="control-label">13. La vida me parece vac&iacute;a sin m&uacute;sica.</label>
                <select class="form-control" name="p13" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p14" class="control-label">14. Siempre entiendo los gr&aacute;ficos que vienen en las instrucciones de equipos o
instrumentos.</label>
                <select class="form-control" name="p14" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p15" class="control-label">15. Me gusta hacer rompecabezas y entretenerme con juegos electr&oacute;nicos.</label>
                <select class="form-control" name="p15" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p16" class="control-label">16. Me fue f&aacute;cil aprender a andar en bicicleta (o patines).</label>
                <select class="form-control" name="p16" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p17" class="control-label">17. Me enojo cuando oigo una discusi&oacute;n o una afirmaci&oacute;n que parece il&oacute;gica.</label>
                <select class="form-control" name="p17" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p18" class="control-label">18. Soy capaz de convencer a otros que sigan mis planes.</label>
                <select class="form-control" name="p18" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p19" class="control-label">19. Tengo buen sentido de equilibrio y coordinaci&oacute;n.</label>
                <select class="form-control" name="p19" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p20" class="control-label">20. Con frecuencia veo configuraciones y relaciones entre n&acucute;meros con m&aacute;s rapidez y
facilidad que otros.</label>
                <select class="form-control" name="p20" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p21" class="control-label">21. Me gusta construir modelos (o hacer esculturas).</label>
                <select class="form-control" name="p21" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p22" class="control-label">22. Tengo agudeza para encontrar el significado de las palabras.</label>
                <select class="form-control" name="p22" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p23" class="control-label">23. Puedo mirar un objeto de una manera y con la misma facilidad verlo.</label>
                <select class="form-control" name="p23" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p24" class="control-label">24. Con frecuencia hago la conexi&oacute;n entre una pieza de m&uacute;sica y alg&uacute;n evento de mi vida.</label>
                <select class="form-control" name="p24" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p25" class="control-label">25. Me gusta trabajar con n&uacute;meros y figuras.</label>
                <select class="form-control" name="p25" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p26" class="control-label">26. Me gusta sentarme silenciosamente y reflexionar sobre mis sentimientos &iacute;ntimos.</label>
                <select class="form-control" name="p26" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p27" class="control-label">27. Con s&oacute;lo mirar la forma de construcciones y estructuras me siento a gusto.</label>
                <select class="form-control" name="p27" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p28" class="control-label">28. Me gusta tararear, silbar y cantar en la ducha o cuando estoy sola.</label>
                <select class="form-control" name="p28" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p29" class="control-label">29. Soy bueno(a) para el atletismo.</label>
                <select class="form-control" name="p29" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p30" class="control-label">30. Me gusta escribir cartas detalladas a mis amigos.</label>
                <select class="form-control" name="p30" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p31" class="control-label">31. Generalmente me doy cuenta de la expresi&oacute;n que tengo en la cara.</label>
                <select class="form-control" name="p31" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p32" class="control-label">32. Me doy cuenta de las expresiones en la cara de otras personas.</label>
                <select class="form-control" name="p32" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p33" class="control-label">33. Me mantengo "en contacto" con mis estados de &aacute;nimo. No me cuesta identificarlos.</label>
                <select class="form-control" name="p33" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p34" class="control-label">34. Me doy cuenta de los estados de &aacute;nimo de otros.</label>
                <select class="form-control" name="p34" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p35" class="control-label">35. Me doy cuenta bastante bien de lo que otros piensan de m&iacute;.</label>
                <select class="form-control" name="p35" required>
                    <option value=""></option>
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input class="btn btn-primary" type="submit" name="submit" value="Enviar" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>
