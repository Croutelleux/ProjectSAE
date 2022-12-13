<?php
define("NUMTEL", "+33(0)4 74 45 50 50");
define("ADRESSPART1", "71,rue Peter Fink");
define("ADRESSPART2", "01000 Bourg-en-Bresse");
function fctImage()
{
    if (strpos($_SERVER["HTTP_ACCEPT"], "image/avif")) return ".avif";
    if (strpos($_SERVER["HTTP_ACCEPT"], "image/webp")) return ".webp";
    return '.jpg';
}
