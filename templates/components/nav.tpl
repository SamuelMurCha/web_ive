<nav>
    <div class="nav__logo">
        <img src="{$base_url}/images/logos/Logo.png" alt="Logo" />
    </div>

    <ul class="nav__menu">
        <li class="nav__item">
            <a href="{$base_url}">Inicio</a>
        </li>
        <li class="nav__item">
            <a href="#about">Nosotros</a>
            <ul class="nav__submenu">
                <li class="nav__submenu-item"><a href="#team">Contáctanos</a></li>
                <li class="nav__submenu-item"><a href="#mission">Soy nuevo</a></li>
                <li class="nav__submenu-item"><a href="#vision">Lo que creemos</a></li>
                <li class="nav__submenu-item"><a href="#vision">Bautismos</a></li>
                <li class="nav__submenu-item"><a href="{$base_url}/membresia">Membresía</a></li>
            </ul>
        </li>
        <li class="nav__item">
            <a href="{$base_url}/equipos">Equipos</a>
            <ul class="nav__submenu">
                {if isset($equipos) && $equipos|@count > 0}
                    {foreach $equipos as $equipo}
                        <li class="nav__submenu-item"><a href="{$base_url}/equipos/{$equipo.slug}">{$equipo.nombre}</a></li>
                    {/foreach}
                {else}
                    <li>No hay equipos disponibles</li>
                {/if}
            </ul>
        </li>
        <li class="nav__item">
            <a href="{$base_url}/eventos">Eventos</a>
        </li>
        <li class="nav__item">
            <a href="#services">Servicios</a>
            <ul class="nav__submenu">
                <li class="nav__submenu-item"><a href="#design">Servicios en Línea</a></li>
                <li class="nav__submenu-item"><a href="#design">Series de Sermones</a></li>
                <li class="nav__submenu-item"><a href="#development">Podcasts</a></li>
                <li class="nav__submenu-item"><a href="#marketing">Devocionales</a></li>
            </ul>
        </li>
        <li class="nav__item">
            <a href="#contact">Ofrendas</a>
        </li>
        <li class="nav__item">
            <a href="#contact">Contáctanos</a>
        </li>
    </ul>

   <i class='bx bx-menu nav__button'></i>
</nav>

