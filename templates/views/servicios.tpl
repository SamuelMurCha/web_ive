<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicios</title>
</head>
<body>
    <h1>Servicios (Cultos Grabados)</h1>
    <ul>
        {foreach from=$servicios item=servicio}
            <li><a href="{$base_url}/servicios/{$servicio.token}">{$servicio.nombre} - {$servicio.fecha}</a></li>
        {/foreach}
    </ul>
</body>
</html>
