<?php
/* Smarty version 5.4.2, created on 2024-11-27 21:22:57
  from 'file:membresia.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67477fa1ba8bb3_98025061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a34d2fb1293cf169034edf33281af77dc456d290' => 
    array (
      0 => 'membresia.tpl',
      1 => 1732738822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/components/nav.tpl' => 1,
  ),
))) {
function content_67477fa1ba8bb3_98025061 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\web\\templates\\views';
?><!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/membresia.css">
    <style>
        @media print {

            nav,
            .section__intro__top,
            button {
                display: none;
            }

            input::placeholder,
            select {
                color: #fff !important;
            }

            main {
                padding: 0;
            }
        }
    </style>
</head>

<body>

    <?php $_smarty_tpl->renderSubTemplate('file:templates/components/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <main>
        <section class="section__intro__top">
            <div class="intro__text">
                <h1>Membresía</h1>
                <small>Nos encantaría conocerte más y caminar juntos en tu fe.</small>
            </div>
        </section>

        <section class="section__form__main">
            <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
/membresia/guardar" method="POST" class="form__general">



                <!-- Información Adicional -->
                <section id="tipo-membresia" class="section__form">
                    <div class="text__section">
                        <h5>Tipo de membresía</h5>
                        <small>Por favor proporciona el tipo de membresía.</small>
                    </div>
                    <div class="content__section">
                        <div class="group__input__general">
                            <label for="tipo">Tipo de membresía<b>*</b></label>
                            <select id="tipo" name="tipo_membresia" required>
                                <option value="" disabled selected>Selecciona</option>
                                <option value="adulto">Adulto</option>
                                <option value="menor">Menor de edad</option>
                            </select>
                        </div>
                    </div>
                </section>

                <!-- Información Personal -->
                <section id="informacion-personal" class="section__form section__hide">
                    <div class="text__section">
                        <h5>Información Personal</h5>
                        <small>Por favor proporciona tu información básica.</small>
                    </div>
                    <div class="content__section">
                        <div class="group__input__general">
                            <label for="nombre">Nombre <b>*</b></label>
                            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
                        </div>
                        <div class="group__input__general">
                            <label for="nombre">Identificación <b>*</b></label>
                            <input type="text" id="identificación" name="identificacion" placeholder="Mismo formato del documento de identificación (101110111)"
                                required>
                        </div>
                        <div class="group__input__general">
                            <label for="fecha-nacimiento">Fecha de nacimiento <b>*</b></label>
                            <input type="date" id="fecha-nacimiento" name="fecha_nacimiento" required>
                        </div>
                        <div class="group__input__general">
                            <label for="sexo">Sexo <b>*</b></label>
                            <select id="sexo" name="sexo" required>
                                <option value="" disabled selected>Selecciona tu género</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="group__input__general">
                            <label for="direccion">Dirección <b>*</b></label>
                            <input type="text" id="direccion" name="direccion" placeholder="Selecciona tu dirección"
                                list="provincias" required>
                            <datalist id="provincias">
                                <!-- Alajuela -->
                                <option value="Alajuela,Central,Alajuela"></option>
                                <option value="Alajuela,Central,San José"></option>
                                <option value="Alajuela,Central,San Antonio"></option>
                                <option value="Alajuela,San Ramón,San Ramón"></option>
                                <option value="Alajuela,San Ramón,Santiago"></option>
                                <option value="Alajuela,Grecia,Grecia"></option>
                                <option value="Alajuela,Grecia,San Isidro"></option>
                                <option value="Alajuela,San Carlos,Quesada"></option>
                                <option value="Alajuela,San Carlos,Florencia"></option>
                                <option value="Alajuela,Atenas,Atenas"></option>
                                <option value="Alajuela,Poás,San Pedro"></option>
                                <option value="Alajuela,Orotina,Orotina"></option>
                                <option value="Alajuela,Zarcero,Zarcero"></option>
                                <option value="Alajuela,Sarchí,Sarchí Norte"></option>
                                <option value="Alajuela,Naranjo,Naranjo"></option>

                                <!-- Heredia -->
                                <option value="Heredia,Central,Heredia"></option>
                                <option value="Heredia,Central,San Francisco"></option>
                                <option value="Heredia,Central,Ulloa"></option>
                                <option value="Heredia,Santo Domingo,Santo Domingo"></option>
                                <option value="Heredia,Santo Domingo,San Miguel"></option>
                                <option value="Heredia,Santo Domingo,Paracito"></option>
                                <option value="Heredia,San Isidro,San Isidro"></option>
                                <option value="Heredia,Belén,San Antonio"></option>
                                <option value="Heredia,Flores,San Joaquín"></option>
                                <option value="Heredia,San Rafael,San Rafael"></option>
                                <option value="Heredia,San Rafael,San José"></option>
                                <option value="Heredia,Barva,Barva"></option>
                                <option value="Heredia,Barva,San Pablo"></option>
                            </datalist>
                        </div>
                    </div>
                </section>

                <!-- Información Adicional -->
                <section id="informacion-adicional" class="section__form section__hide">
                    <div class="text__section">
                        <h5>Información Adicional</h5>
                        <small>Detalles adicionales sobre ti.</small>
                    </div>
                    <div class="content__section">
                        <div class="group__input__general">
                            <label for="estado-civil">Estado civil <b>*</b></label>
                            <select id="estado-civil" name="estado_civil" required>
                                <option value="" disabled selected>Selecciona tu estado civil</option>
                                <option value="soltero">Soltero</option>
                                <option value="casado">Casado</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="union-libre">Unión Libre</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div class="group__input__general">
                            <label for="ocupacion">Ocupación</label>
                            <input type="text" id="ocupacion" name="ocupacion" placeholder="Selecciona tu ocupación"
                                list="ocupaciones" required>
                            <datalist id="ocupaciones">
                                <!-- Ocupaciones Generales -->
                                <option value="Ama de casa"></option>
                                <option value="Estudiante"></option>
                                <option value="Ingeniero"></option>
                                <option value="Profesor"></option>
                                <option value="Médico"></option>
                                <option value="Abogado"></option>
                                <option value="Enfermero/a"></option>
                                <option value="Administrativo"></option>
                                <option value="Diseñador Gráfico"></option>
                                <option value="Trabajador Social"></option>
                                <option value="Carpintero"></option>
                                <option value="Mecánico"></option>
                                <option value="Vendedor"></option>
                                <option value="Chef"></option>
                                <option value="Recepcionista"></option>
                                <option value="Agricultor"></option>
                                <option value="Estilista"></option>
                                <option value="Electricista"></option>
                                <option value="Chofer"></option>
                                <option value="Contador"></option>
                                <option value="Desempleado"></option>

                                <!-- Estudiantes de Carreras -->
                                <option value="Estudiante de Ingeniería Civil"></option>
                                <option value="Estudiante de Ingeniería en Sistemas"></option>
                                <option value="Estudiante de Medicina"></option>
                                <option value="Estudiante de Derecho"></option>
                                <option value="Estudiante de Psicología"></option>
                                <option value="Estudiante de Diseño Gráfico"></option>
                                <option value="Estudiante de Administración de Empresas"></option>
                                <option value="Estudiante de Educación"></option>
                            </datalist>
                        </div>
                    </div>
                </section>

                <!-- Información Adicional del Menor -->
                <section id="informacion-adicional-menor" class="section__form section__hide">
                    <div class="text__section">
                        <h5>Información Adicional</h5>
                        <small>Detalles adicionales sobre el menor de edad.</small>
                    </div>
                    <div class="content__section">
                        <div class="group__input__general">
                            <label for="nombre-encargado">Nombre del encargado <b>*</b></label>
                            <input type="text" id="nombre-encargado" name="nombre_encargado"
                                placeholder="Nombre completo del encargado" required>
                        </div>
                        <div class="group__input__general">
                            <label for="grado">Grado Académico</label>
                            <select id="grado" name="grado_academico" required>
                                <option value="" disabled selected>Selecciona tu grado académico</option>
                                <option value="preescolar">Preescolar</option>
                                <option value="primaria_1">Primaria - 1°</option>
                                <option value="primaria_2">Primaria - 2°</option>
                                <option value="primaria_3">Primaria - 3°</option>
                                <option value="primaria_4">Primaria - 4°</option>
                                <option value="primaria_5">Primaria - 5°</option>
                                <option value="primaria_6">Primaria - 6°</option>
                                <option value="secundaria_1">Secundaria - 1°</option>
                                <option value="secundaria_2">Secundaria - 2°</option>
                                <option value="secundaria_3">Secundaria - 3°</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>
                </section>

                <!-- Datos Espirituales -->
                <section id="datos-espirituales" class="section__form section__hide">
                    <div class="text__section">
                        <h5>Datos Espirituales</h5>
                        <small>Proporciona tu información espiritual.</small>
                    </div>
                    <div class="content__section">
                        <div class="group__input__general">
                            <label for="bautizo-agua">¿Estás bautizado en agua? <b>*</b></label>
                            <select id="bautizo-agua" name="bautizo_agua" required>
                                <option value="" disabled selected>Selecciona</option>
                                <option value="si">Sí</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="group__input__general">
                            <label for="bautizo-espiritu">¿Estás bautizado en el Espíritu Santo con la señal inicial de
                                hablar en otras lenguas?</label>
                            <select id="bautizo-espiritu" name="bautizo_espiritu">
                                <option value="" disabled selected>Selecciona</option>
                                <option value="si">Sí</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                </section>

                <!-- Participación en la Iglesia -->
                <section id="participacion-iglesia" class="section__form section__hide">
                    <div class="text__section">
                        <h5>Participación en la Iglesia</h5>
                        <small>Indica tu experiencia en la iglesia.</small>
                    </div>
                    <div class="content__section">
                        <div class="group__input__general">
                            <label for="anos-asistencia">Tiempo de asistencia</label>
                            <div class="input__flex">
                                <select id="unidad-tiempo-asistencia" name="unidad_tiempo_asistencia" required>
                                    <option value="" disabled selected>Selecciona</option>
                                    <option value="semanas">Semana(s)</option>
                                    <option value="meses">Mes(es)</option>
                                    <option value="anos">Año(s)</option>
                                </select>
                                <input type="number" id="cantidad-tiempo-asistencia" name="anos_asistencia"
                                    placeholder="Ejemplo: 5">
                            </div>
                        </div>
                        <div class="group__input__general">
                            <label for="disponibilidad">¿Disponibilidad para servir? <b>*</b></label>
                            <select id="disponibilidad" name="disponibilidad" required>
                                <option value="" disabled selected>Selecciona</option>
                                <option value="si">Sí</option>
                                <option value="no">No</option>
                                <option value="actual">Actualmente sirvo</option>
                            </select>
                        </div>
                        <div class="group__input__general" id="input-areas">
                            <label for="area-servicio">Selecciona las áreas donde te gustaría servir o ya sirves</label>
                            <div class="checkbox__list">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('equipos'), 'equipo');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('equipo')->value) {
$foreach0DoElse = false;
?>
                                    <label for="<?php echo $_smarty_tpl->getValue('equipo')['nombre'];?>
"><input type="checkbox" name="areas_servicio[]"
                                            id="<?php echo $_smarty_tpl->getValue('equipo')['nombre'];?>
"><?php echo $_smarty_tpl->getValue('equipo')['nombre'];?>
</label>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="submit__section">
                    <button type="submit" class="btn__submit">Registrar membresía</button>
                </div>
            </form>
        </section>





    </main>

    <!-- Jquery -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"><?php echo '</script'; ?>
>

     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
/js/main.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $(".section__form.section__hide, #input-areas").hide();

            $("#tipo").on('change', function() {
                var type = $(this).val();
                $(".section__form.section__hide").hide();

                if (type == "adulto") {
                    $(".section__form.section__hide").show();
                    $(".section__form.section__hide#informacion-adicional-menor").hide();

                    // Quitar 'required' de los campos de menor de edad
                    $("#nombre-encargado, #grado").prop('required', false);
                } else {
                    $(".section__form.section__hide").show();
                    $(".section__form.section__hide#informacion-adicional-menor").show();
                    $(".section__form.section__hide#informacion-adicional").hide();

                    // Agregar 'required' a los campos de menor de edad
                    $("#nombre-encargado, #grado").prop('required', true);
                }
            });

            $("#disponibilidad").on('change', function() {
                var disponibilidad = $(this).val();
                if (disponibilidad == "si" || disponibilidad == "actual") {
                    $("#input-areas").show();
                } else {
                    $("#input-areas").hide();
                }
            });
        });
    <?php echo '</script'; ?>
>


</body>

</html><?php }
}
