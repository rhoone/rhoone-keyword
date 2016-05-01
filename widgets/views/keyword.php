<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license https://vistart.name/license/
 */
use rhoone\models\Keyword;
/* @var $keyword Keyword */
function print_array($array)
{
    foreach ($array as $content) {
        echo $content . "<br/>";
    }
}
?>
<table class="table">
    <thead>
        <tr>
            <th>Keyword</th>
            <th>Segmented</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $keyword->raw ?></td>
            <td><?php print_array($keyword->segmented) ?></td>
        </tr>
    </tbody>
</table>