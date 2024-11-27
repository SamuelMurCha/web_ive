<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/equipos.css">
</head>

<body>

    {include file='templates/components/nav.tpl'}

    <main>
        <section class="section__intro__top">
            <div class="intro__text">
                <h1>Equipos</h1>
                <small>Conoce más sobre nuestros equipos</small>
            </div>
        </section>

        <section class="section__teams">
            {foreach from=$equipos item=equipo}
                <div class="card__team">
                    <div class="card__image">
                        <img src="images/portadas/{$equipo.slug}.jpg" alt="{$equipo.nombre}">
                    </div>
                    <div class="card__content">
                        <h5>{$equipo.nombre}</h5>
                        <!-- Cortar la descripción si es mayor a 100 caracteres -->
                        <small>{truncate($equipo.descripcion, 200, '...', true)}</small>
                        <a href="{$base_url}/equipos/{$equipo.slug}">Conocer más</a>
                    </div>
                </div>
            {/foreach}
        </section>
    </main>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

       <script src="{$base_url}/js/main.js"></script>


</body>

</html>