<?php
/**
 * Created by PhpStorm.
 * User: nataliandre
 * Date: 01.05.16
 * Time: 21:33
 */

include "libs.php";





$wall['start']['x'] = 2;
$wall['start']['y'] = 2;
$wall['end']['x'] = 4;
$wall['end']['y'] = 4;

$p['x'] = 3;
$p['y'] = 3.12;



if(isVertical($wall) || isHorizontal($wall)) {
    if (
        (
            $wall['start']['x'] == $wall['end']['x']
            && $wall['end']['x'] == $p['x']
            && (
                ($p['y'] <= $wall['end']['y'] && $p['x'] >= $wall['start']['y'])
                ||
                ($p['y'] >= $wall['end']['y'] && $p['x'] <= $wall['start']['y'])
            )
        )
        ||
        (
            $wall['start']['y'] == $wall['end']['y']
            && $wall['end']['y'] == $p['y']
            && (
                ($p['x'] <= $wall['end']['x'] && $p['x'] >= $wall['start']['x'])
                ||
                ($p['x'] >= $wall['end']['x'] && $p['x'] <= $wall['start']['x'])
            )
        )
    ) {echo 'isOnWall';}else{echo 'noOnLine';}
}else{
    if(isOnSlantLineVectorMethod($p,$wall)){echo 'isOnWall';}else{echo 'noOnLine';}
}



