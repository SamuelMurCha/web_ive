<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$equipo.nombre}</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="{$base_url}/css/detalle.css">
</head>

<body>

    {include file='templates/components/nav.tpl'}

    <main>
        <section class="section__intro__top"
            style="background-image: url('{$base_url}/images/portadas/{$equipo.slug}.jpg');">
            <div class="intro__text">
                <h1>{$equipo.nombre}</h1>
                <small>Iglesia Vida Eterna</small>
            </div>
        </section>
    </main>


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

       <script src="{$base_url}/js/main.js"></script>

</body>

</html>