<?php

/**
 * Add some bash colors to a string.
 *
 * @param string $string      The string that will be colorized.
 * @param string $color       Foreground color.
 * @param string $background  Background color.
 * @static
 * @access public
 * @return string The colorized string
 *
 * @copyright  2011 Arkadius Stefanski (MIT License)
 * @author     Arkadius Stefanski <arkste[at]gmail[dot]com>
 * @author     modified by Aziz Light
 * @license    MIT License
 */
public static function colorize($string, $color = null, $background = null)
{

    $colored_string = "";

    $_fg_color = array();
    $_bg_color = array();

    $_fg_color['black'        ] = '0;30';
    $_fg_color['dark_gray'    ] = '1;30';
    $_fg_color['blue'         ] = '0;34';
    $_fg_color['light_blue'   ] = '1;34';
    $_fg_color['green'        ] = '0;32';
    $_fg_color['light_green'  ] = '1;32';
    $_fg_color['cyan'         ] = '0;36';
    $_fg_color['light_cyan'   ] = '1;36';
    $_fg_color['red'          ] = '0;31';
    $_fg_color['light_red'    ] = '1;31';
    $_fg_color['purple'       ] = '0;35';
    $_fg_color['light_purple' ] = '1;35';
    $_fg_color['brown'        ] = '0;33';
    $_fg_color['yellow'       ] = '1;33';
    $_fg_color['light_gray'   ] = '0;37';
    $_fg_color['white'        ] = '1;37';

    $_bg_color['black'        ] = '40';
    $_bg_color['red'          ] = '41';
    $_bg_color['green'        ] = '42';
    $_bg_color['yellow'       ] = '43';
    $_bg_color['blue'         ] = '44';
    $_bg_color['magenta'      ] = '45';
    $_bg_color['cyan'         ] = '46';
    $_bg_color['light_gray'   ] = '47';

    if (isset($_fg_color[$color]))
    {
        $colored_string .= "\033[" . $_fg_color[$color] . "m";
    }

    if (isset($_bg_color[$background]))
    {
        $colored_string .= "\033[" . $_bg_color[$background] . "m";
    }

    $colored_string .= $string . "\033[0m";

    return $colored_string;
}
