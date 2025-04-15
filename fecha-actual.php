<?php
/*
Plugin Name: Fecha Actual Mejorada
Description: Muestra la fecha o el año actual mediante shortcodes [fecha_actual] y [anio_actual].
Version: 1.2
Author: Cristian Torres
Author URI: https://portafolio-nine-umber.vercel.app
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function shortcode_fecha_actual()
{
    $locale = 'es_ES';
    $formatter = new IntlDateFormatter(
        $locale,
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        date_default_timezone_get(),
        IntlDateFormatter::GREGORIAN
    );

    $fecha = $formatter->format(new DateTime());
    return ucfirst($fecha);
}
add_shortcode('fecha_actual', 'shortcode_fecha_actual');

function shortcode_anio_actual()
{
    return date('Y');
}
add_shortcode('anio_actual', 'shortcode_anio_actual');
