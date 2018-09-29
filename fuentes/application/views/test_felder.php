<!DOCTYPE html>
<html>
<head>
    <title>Moodlels</title>

    <!-- Cabecera -->
    <?php $this->load->view('comunes/cabecera')?>
</head>
<body>
    <div class="container cabecera">
        <h1>Test Felder</h1>
    </div>
    <div class="container">
        <!-- Menu -->
        <?php $this->load->view('comunes/menu')?>
        <br>
    </div>
    <div class="container">
        <form action="testFelder/encuesta1" method="post">
            <div class="form-group">
                <label for="p1" class="control-label">1. Entiendo mejor algo</label>
                <select class="form-control" name="p1" required>
                    <option value=""></option>
                    <option value="a">(a) si lo practico.</option>
                    <option value="b">(b) si pienso en ello.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p2" class="control-label">2. Me considero</label>
                <select class="form-control" name="p2" required>
                    <option value=""></option>
                    <option value="a">(a) realista.</option>
                    <option value="b">(b) Innovador.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p3" class="control-label">3. Cuando pienso acerca de lo que hice ayer, es más probable que lo haga sobre
la base de</label>
                <select class="form-control" name="p3" required>
                    <option value=""></option>
                    <option value="a">(a) una imagen.</option>
                    <option value="b">(b) Palabras.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p4" class="control-label">4. Tengo tendencia a</label>
                <select class="form-control" name="p4" required>
                    <option value=""></option>
                    <option value="a">(a) entender los detalles de un tema pero no ver claramente su estructura
completa.</option>
                    <option value="b">(b) entender la estructura completa pero no ver claramente los detalles.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p5" class="control-label">5. Cuando estoy aprendiendo algo nuevo, me ayuda</label>
                <select class="form-control" name="p5" required>
                    <option value=""></option>
                    <option value="a">(a) hablar de ello.</option>
                    <option value="b">(b) pensar en ello.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p6" class="control-label">6. Si yo fuera profesor, yo preferiría dar un curso</label>
                <select class="form-control" name="p6" required>
                    <option value=""></option>
.                   <option value="a">(a) que trate sobre hechos y situaciones reales de la vida.</option>
                    <option value="b">(b) que trate con ideas y teorías</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p7" class="control-label">7. Prefiero obtener información nueva de</label>
                <select class="form-control" name="p7" required>
                    <option value=""></option>
                    <option value="a">(a) imágenes, diagramas, gráficas o mapas.</option>
                    <option value="b">(b) instrucciones escritas o información verbal.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p8" class="control-label">8. Una vez que entiendo</label>
                <select class="form-control" name="p8" required>
                    <option value=""></option>
                    <option value="a">(a) todas las partes, entiendo el total.</option>
                    <option value="b">(b) el total de algo, entiendo como encajan sus partes.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p9" class="control-label">9. En un grupo de estudio que trabaja con un material difícil, es más probable que</label>
                <select class="form-control" name="p9" required>
                    <option value=""></option>
                    <option value="a">(a) participe y contribuya con ideas.</option>
                    <option value="b">(b) no participe y solo escuche.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p10" class="control-label">10. Es más fácil para mí</label>
                <select class="form-control" name="p10" required>
                    <option value=""></option>
                    <option value="a">(a) aprender hechos.</option>
                    <option value="b">(b) aprender conceptos.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p11" class="control-label">11. En un libro con muchas imágenes y gráficas es más probable que</label>
                <select class="form-control" name="p11" required>
                    <option value=""></option>
                    <option value="a">(a) revise cuidadosamente las imágenes y las gráficas.</option>
                    <option value="b">(b) me concentre en el texto escrito.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p12" class="control-label">12. Cuando resuelvo problemas de matemáticas</label>
                <select class="form-control" name="p12" required>
                    <option value=""></option>
                    <option value="a">(a) generalmente trabajo sobre las soluciones con un paso a la vez.</option>
                    <option value="b">(b) frecuentemente sé cuales son las soluciones, pero luego tengo dificultad
para imaginarme los pasos para llegar a ellas.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p13" class="control-label">13. En las clases a las que he asistido</label>
                <select class="form-control" name="p13" required>
                    <option value=""></option>
                    <option value="a">(a) he llegado a saber como son muchos de los estudiantes.</option>
                    <option value="b">(b) raramente he llegado a saber como son muchos estudiantes.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p14" class="control-label">14. Cuando leo temas que no son de ficción, prefiero</label>
                <select class="form-control" name="p14" required>
                    <option value=""></option>
                    <option value="a">(a) algo que me enseñe nuevos hechos o me diga como hacer algo.</option>
                    <option value="b">(b) algo que me de nuevas ideas en que pensar.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p15" class="control-label">15. Me gustan los maestros</label>
                <select class="form-control" name="p15" required>
                    <option value=""></option>
                    <option value="a">(a) que utilizan muchos esquemas en el pizarrón.</option>
                    <option value="b">(b) que toman mucho tiempo para explicar.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p16" class="control-label">16. Cuando estoy analizando un cuento o una novela</label>
                <select class="form-control" name="p16" required>
                    <option value=""></option>
                    <option value="a">(a) pienso en los incidentes y trato de acomodarlos para configurar los temas.</option>
                    <option value="b">(b) me doy cuenta de cuales son los temas cuando termino de leer y luego
tengo que regresar y encontrar los incidentes que los demuestran.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p17" class="control-label">17. Cuando comienzo a resolver un problema de tarea, es más probable que</label>
                <select class="form-control" name="p17" required>
                    <option value=""></option>
                    <option value="a">(a) comience a trabajar en su solución inmediatamente.</option>
                    <option value="b">(b) primero trate de entender completamente el problema.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p18" class="control-label">18. Prefiero la idea de</label>
                <select class="form-control" name="p18" required>
                    <option value=""></option>
                    <option value="a">(a) certeza.</option>
                    <option value="b">(b) Teoría.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p19" class="control-label">19. Recuerdo mejor</label>
                <select class="form-control" name="p19" required>
                    <option value=""></option>
                    <option value="a">(a) lo que veo.</option>
                    <option value="b">(b) lo que oigo.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p20" class="control-label">20. Es más importante para mí que un profesor</label>
                <select class="form-control" name="p20" required>
                    <option value=""></option>
                    <option value="a">(a) exponga el material en pasos secuenciales claros.</option>
                    <option value="b">(b) me dé un panorama general y relacione el material con otros temas.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p21" class="control-label">21. Prefiero estudiar</label>
                <select class="form-control" name="p21" required>
                    <option value=""></option>
                    <option value="a">(a) en un grupo de estudio.</option>
                    <option value="b">(b) Solo.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p22" class="control-label">22. Me considero</label>
                <select class="form-control" name="p22" required>
                    <option value=""></option>
                    <option value="a">(a) cuidadoso en los detalles de mi trabajo.</option>
                    <option value="b">(b) creativo en la forma en la que hago mi trabajo.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p23" class="control-label">23. Cuando alguien me da direcciones de nuevos lugares, prefiero</label>
                <select class="form-control" name="p23" required>
                    <option value=""></option>
                    <option value="a">(a) un mapa.</option>
                    <option value="b">(b) instrucciones escritas.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p24" class="control-label">24. Aprendo</label>
                <select class="form-control" name="p24" required>
                    <option value=""></option>
                    <option value="a">(a) a un paso constante. Si estudio con ahínco consigo lo que deseo.</option>
                    <option value="b">(b) en inicios y pausas. Me llego a confundir y súbitamente lo entiendo.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p25" class="control-label">25. Prefiero primero</label>
                <select class="form-control" name="p25" required>
                    <option value=""></option>
                    <option value="a">(a) hacer algo y ver que sucede.</option>
                    <option value="b">(b) pensar como voy a hacer algo.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p26" class="control-label">26. Cuando leo por diversión, me gustan los escritores que</label>
                <select class="form-control" name="p26" required>
                    <option value=""></option>
                    <option value="a">(a) dicen claramente los que desean dar a entender.</option>
                    <option value="b">(b) dicen las cosas en forma creativa e interesante.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p27" class="control-label">27. Cuando veo un esquema o bosquejo en clase, es más probable que recuerde</label>
                <select class="form-control" name="p27" required>
                    <option value=""></option>
                    <option value="a">(a) la imagen.</option>
                    <option value="b">(b) lo que el profesor dijo acerca de ella.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p28" class="control-label">28. Cuando me enfrento a un cuerpo de información</label>
                <select class="form-control" name="p28" required>
                    <option value=""></option>
                    <option value="a">(a) me concentro en los detalles y pierdo de vista el total de la misma.</option>
                    <option value="b">(b) trato de entender el todo antes de ir a los detalles.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p29" class="control-label">29. Recuerdo más fácilmente</label>
                <select class="form-control" name="p29" required>
                    <option value=""></option>
                    <option value="a">(a) algo que he hecho.</option>
                    <option value="b">(b) algo en lo que he pensado mucho.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p30" class="control-label">30. Cuando tengo que hacer un trabajo, prefiero</label>
                <select class="form-control" name="p30" required>
                    <option value=""></option>
                    <option value="a">(a) dominar una forma de hacerlo.</option>
                    <option value="b">(b) intentar nuevas formas de hacerlo.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p31" class="control-label">31. Cuando alguien me enseña datos, prefiero</label>
                <select class="form-control" name="p31" required>
                    <option value=""></option>
                    <option value="a">(a) gráficas.</option>
                    <option value="b">(b) resúmenes con texto.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p32" class="control-label">32. Cuando escribo un trabajo, es más probable que</label>
                <select class="form-control" name="p32" required>
                    <option value=""></option>
                    <option value="a">(a) lo haga ( piense o escriba) desde el principio y avance.</option>
                    <option value="b">(b) lo haga (piense o escriba) en diferentes partes y luego las ordene.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p33" class="control-label">33. Cuando tengo que trabajar en un proyecto de grupo, primero quiero</label>
                <select class="form-control" name="p33" required>
                    <option value=""></option>
                    <option value="a">(a) realizar una "tormenta de ideas" donde cada uno contribuye con ideas.</option>
                    <option value="b">(b) realizar la "tormenta de ideas" en forma personal y luego juntarme con el
grupo para comparar las ideas.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p34" class="control-label">34. Considero que es mejor elogio llamar a alguien</label>
                <select class="form-control" name="p34" required>
                    <option value=""></option>
                    <option value="a">(a) sensible.</option>
                    <option value="b">(b) Imaginativo.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p35" class="control-label">35. Cuando conozco gente en una fiesta, es más probable que recuerde</label>
                <select class="form-control" name="p35" required>
                    <option value=""></option>
                    <option value="a">(a) cómo es su apariencia.</option>
                    <option value="b">(b) lo que dicen de sí mismos.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p36" class="control-label">36. Cuando estoy aprendiendo un tema, prefiero</label>
                <select class="form-control" name="p36" required>
                    <option value=""></option>
                    <option value="a">(a) mantenerme concentrado en ese tema, aprendiendo lo más que pueda de
él.</option>
                    <option value="b">(b) hacer conexiones entre ese tema y temas relacionados.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p37" class="control-label">37. Me considero</label>
                <select class="form-control" name="p37" required>
                    <option value=""></option>
                    <option value="a">(a) abierto.</option>
                    <option value="b">(b) Reservado.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p38" class="control-label">38. Prefiero cursos que dan más importancia a</label>
                <select class="form-control" name="p38" required>
                    <option value=""></option>
                    <option value="a">(a) material concreto (hechos,datos).</option>
                    <option value="b">(b) material abstracto (conceptos, teorías).</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p39" class="control-label">39. Para divertirme, prefiero</label>
                <select class="form-control" name="p39" required>
                    <option value=""></option>
                    <option value="a">(a) ver televisión.</option>
                    <option value="b">(b) leer un libro.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p40" class="control-label">40. Algunos profesores inician sus clases haciendo un bosquejo de lo que
enseñarán. Esos bosquejos son</label>
                <select class="form-control" name="p40" required>
                    <option value=""></option>
                    <option value="a">(a) algo útiles para mí.</option>
                    <option value="b">(b) muy útiles para mí.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p41" class="control-label">41. La idea de hacer una tarea en grupo con una sola calificación para todos</label>
                <select class="form-control" name="p41" required>
                    <option value=""></option>
                    <option value="a">(a) me parece bien.</option>
                    <option value="b">(b) no me parece bien.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p42" class="control-label">42. Cuando hago grandes cálculos</label>
                <select class="form-control" name="p42" required>
                    <option value=""></option>
                    <option value="a">(a) tiendo a repetir todos mis pasos y revisar cuidadosamente mi trabajo.</option>
                    <option value="b">(b) me cansa hacer su revisión y tengo que esforzarme para hacerlo.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p43" class="control-label">43. Tiendo a recordar lugares en los que he estado</label>
                <select class="form-control" name="p43" required>
                    <option value=""></option>
                    <option value="a">(a) fácilmente y con bastante exactitud.</option>
                    <option value="b">(b) con dificultad y sin mucho detalle.</option>
                </select>
            </div>

            <div class="form-group">
                <label for="p44" class="control-label">44. Cuando resuelvo problemas en grupo, es más probable que yo</label>
                <select class="form-control" name="p44" required>
                    <option value=""></option>
                    <option value="a">(a) piense en los pasos para la solución de los problemas.</option>
                    <option value="b">(b) piense en las posibles consecuencias o aplicaciones de la solución en un
amplio rango de campos.</option>
                </select>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input class="btn btn-primary" type="submit" name="submit" value="Enviar" />
                </div>
            </div>
        </form>
        <!-- <form role="form" action="eventos/agregarEvento" method='post'>
            <input class="btn btn-primary" type="submit" name="submit" value="Enviar" />
        </form> -->
    </div>
</body>
</html>
