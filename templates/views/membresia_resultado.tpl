<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link rel="stylesheet" href="{$base_url}/css/membresia.css">
    <style>
        .section__result {
            width: 100%;
            height: 40vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    {include file='templates/components/nav.tpl'}

    <main>
        <section class="section__intro__top">
            <div class="intro__text">
                <h1>Membresía</h1>
                <small>Te agradecemos por tomarte el tiempo de registrarte.</small>
            </div>
        </section>

        <section class="section__result">
            <h1>{$title}</h1>

            {if isset($errores) && $errores|@count > 0}
                <div class="errores">
                    <ul>
                        {foreach $errores as $error}
                            <li>{$error}</li>
                        {/foreach}
                    </ul>
                </div>
            {else}
                <p>{$mensaje}</p>
            {/if}
        </section>

    </main>

   <script src="{$base_url}/js/main.js"></script>


</body>

</html>