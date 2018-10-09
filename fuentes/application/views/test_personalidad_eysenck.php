<!DOCTYPE html>
<html>
<head>
    <title>Moodlels</title>

    <!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera')?>
</head>
<body>
    <div class="container cabecera my-5">
        <h1>Test de personalidad Eysenck</h1>
    </div>
    <div class="container">
        <!-- Menu -->
        <?php $this->load->view('comunes/menu')?>
        <br>
    </div>
    <div class="container">
        <form action="testPersonalidadEysenck/encuesta" method="post">
            <div class="form-group">
                <label for="p1" class="control-label">1. ¿Le gusta abundancia de excitaci&oacute;n y bullicio a su alrededor?</label>
                <select class="form-control" name="p1" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p2" class="control-label">2. ¿Tiene a menudo un sentimiento de intranquilidad, como si quisiera algo, pero sin saber qu&eacute;?</label>
                <select class="form-control" name="p2" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p3" class="control-label">3. ¿Tiene casi siempre una contestaci&oacute;n lista a la mano cuando se le habla?</label>
                <select class="form-control" name="p3" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p4" class="control-label">4. ¿Se siente algunas veces feliz, algunas veces triste, sin una raz&oacute;n real?</label>
                <select class="form-control" name="p4" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p5" class="control-label">5. ¿Permanece usualmente retra&iacute;do (a) en fiestas y reuniones?</label>
                <select class="form-control" name="p5" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p6" class="control-label">6. Cuando era ni&ntilde;o(a) ¿Hac&iacute;a siempre inmediatamente lo que le dec&iacute;an, sin refunfu&ntilde;ar?</label>
                <select class="form-control" name="p6" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p7" class="control-label">7. ¿Se enfada o molesta a menudo?</label>
                <select class="form-control" name="p7" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p8" class="control-label">8. Cuando lo(a) meten a una pelea ¿Prefiere sacar los trapitos al aire de una vez por todas, en vez de quedar callado(a) esperando que las cosas se calmen solas?</label>
                <select class="form-control" name="p8" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p9" class="control-label">9. ¿Es usted triste, melanc&oacute;lico (a)?</label>
                <select class="form-control" name="p9" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p10" class="control-label">10. ¿Le gusta mezclarse con la gente?</label>
                <select class="form-control" name="p10" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p11" class="control-label">11. ¿Ha perdido a menudo el sue&ntilde;o por sus preocupaciones?</label>
                <select class="form-control" name="p11" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p12" class="control-label">12. ¿Se pone a veces malhumorado (a)?</label>
                <select class="form-control" name="p12" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p13" class="control-label">13. ¿Se catalogar&iacute;a a si mismo(a) como despreocupado (a) o confiado a su buena suerte?</label>
                <select class="form-control" name="p13" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p14" class="control-label">14. ¿Se decide a menudo demasiado tarde?</label>
                <select class="form-control" name="p14" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p15" class="control-label">15. ¿Le gusta trabajar solo (a)?</label>
                <select class="form-control" name="p15" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p16" class="control-label">16. ¿Se ha sentido a menudo ap&aacute;tico (a) y cansado(a) sin raz&oacute;n?</label>
                <select class="form-control" name="p16" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p17" class="control-label">17. ¿Es por lo contrario animado(a) y jovial?</label>
                <select class="form-control" name="p17" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p18" class="control-label">18. ¿Se r&iacute;e a menudo de chistes groseros?</label>
                <select class="form-control" name="p18" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p19" class="control-label">19. ¿Se siente a menudo hastiado(a), harto, fastidiado?</label>
                <select class="form-control" name="p19" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p20" class="control-label">20. ¿Se siente incomodo(a) con vestidos que no son del diario?</label>
                <select class="form-control" name="p20" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p21" class="control-label">21. ¿Se distrae (vaga su mente) a menudo cuando trata de prestar atenci&oacute;n a algo?</label>
                <select class="form-control" name="p21" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p22" class="control-label">22. ¿Puede expresar en palabras f&aacute;cilmente lo que piensa?</label>
                <select class="form-control" name="p22" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p23" class="control-label">23. ¿Se abstrae (se pierde en sus pensamientos) a menudo?</label>
                <select class="form-control" name="p23" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p24" class="control-label">24. ¿Est&aacute; completamente libre de prejuicios de cualquier tipo?</label>
                <select class="form-control" name="p24" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p25" class="control-label">25. ¿Le gusta las bromas?</label>
                <select class="form-control" name="p25" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p26" class="control-label">26. ¿Piensa a menudo en su pasado?</label>
                <select class="form-control" name="p26" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p27" class="control-label">27. ¿Le gusta mucho la buena comida?</label>
                <select class="form-control" name="p27" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p28" class="control-label">28. Cu&aacute;ndo se fastidia ¿Necesita alg&uacute;n(a) amigo(a) para hablar sobre ello?</label>
                <select class="form-control" name="p28" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p29" class="control-label">29. ¿Le molesta vender cosas o pedir dinero a la gente para alguna buena causa?</label>
                <select class="form-control" name="p29" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p30" class="control-label">30. ¿Alardea (se jacta) un poco a veces?</label>
                <select class="form-control" name="p30" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p31" class="control-label">31. ¿Es usted muy susceptible (sensible) por algunas cosas?</label>
                <select class="form-control" name="p31" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p32" class="control-label">32. ¿Le gusta m&aacute;s quedarse en casa, que ir a una fiesta aburrida?</label>
                <select class="form-control" name="p32" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p33" class="control-label">33. ¿Se pone a menudo tan inquieto(a) que no puede permanecer sentado(a) durante mucho rato en una silla?</label>
                <select class="form-control" name="p33" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p34" class="control-label">34. ¿Le gusta planear las cosas, con mucha anticipaci&oacute;n?</label>
                <select class="form-control" name="p34" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p35" class="control-label">35. ¿Tiene a menudo mareos (v&eacute;rtigos)?</label>
                <select class="form-control" name="p35" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p36" class="control-label">36. ¿Contesta siempre una carta personal, tan pronto como puede, despu&eacute;s de haberla le&iacute;do?</label>
                <select class="form-control" name="p36" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p37" class="control-label">37. ¿Hace usted usualmente las cosas mejor resolvi&eacute;ndolas solo(a) que hablando a otra persona sobre ello?</label>
                <select class="form-control" name="p37" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p38" class="control-label">38. ¿Le falta frecuentemente aire, sin haber hecho un trabajo pesado?</label>
                <select class="form-control" name="p38" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p39" class="control-label">39. ¿Es usted generalmente una persona tolerante, que no se molesta si las cosas no est&aacute;n perfectas?</label>
                <select class="form-control" name="p39" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p40" class="control-label">40. ¿Sufre de los nervios?</label>
                <select class="form-control" name="p40" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p41" class="control-label">41. ¿Le gustar&iacute;a m&aacute;s planear cosas, que hacer cosas?</label>
                <select class="form-control" name="p41" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p42" class="control-label">42. ¿Deja algunas veces para ma&ntilde;ana o qlue deber&iacute;a hacer hoy d&iacute;a?</label>
                <select class="form-control" name="p42" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p43" class="control-label">43. ¿Se pone nervioso(a) en lugares tales como ascensores, trenes o t&uacute;neles?</label>
                <select class="form-control" name="p43" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p44" class="control-label">44. Cuando hace nuevos amigos(as) ¿Es usted usualmente quien inicia la relaci&oacute;n o invita a que se produzca?</label>
                <select class="form-control" name="p44" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p45" class="control-label">45. ¿Sufre fuertes dolores de cabeza?</label>
                <select class="form-control" name="p45" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p46" class="control-label">46. ¿Siente generalmente que las cosas se arreglaran por s&iacute; solas y que terminaran bien de alg&uacute;n modo?</label>
                <select class="form-control" name="p46" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p47" class="control-label">47. ¿Le cuesta trabajo coger el sue&ntilde;o al acostarse en las noches?</label>
                <select class="form-control" name="p47" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p48" class="control-label">48. ¿Ha dicho alguna vez mentiras en su vida?</label>
                <select class="form-control" name="p48" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p49" class="control-label">49. ¿Dice algunas veces lo primero que se le viene a la cabeza?</label>
                <select class="form-control" name="p49" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p50" class="control-label">50. ¿Se preocupa durante un tiempo demasiado largo, despu&eacute;s de una experiencia embarazosa?</label>
                <select class="form-control" name="p50" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p51" class="control-label">51. ¿Se mantiene usualmente h&eacute;rnico(a) o encerrado (a) en s&iacute; mismo(a), excepto con amigos muy &iacute;ntimos?</label>
                <select class="form-control" name="p51" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p52" class="control-label">52. ¿Se crea a menudo problemas, por hacer cosas sin pensar?</label>
                <select class="form-control" name="p52" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p53" class="control-label">53. ¿Le gusta contar chistes y referir historias graciosas a sus amigos?</label>
                <select class="form-control" name="p53" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p54" class="control-label">54. ¿Se le hace m&aacute;s f&aacute;cil ganar que perder un juego?</label>
                <select class="form-control" name="p54" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p55" class="control-label">55. ¿Se siente a menudo demasiado consciente de s&iacute; mismo(a) o poco natural cuando est&aacute; con sus superiores?</label>
                <select class="form-control" name="p55" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p56" class="control-label">56. Cuando todas las posibilidades est&aacute;n contra usted, ¿Piensa a&uacute;n usualmente que vale la pena intentar?</label>
                <select class="form-control" name="p56" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="p57" class="control-label">57. ¿Siente “sensaciones” en el abdomen, antes de un hecho importante?</label>
                <select class="form-control" name="p57" required>
                    <option value=""></option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
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
