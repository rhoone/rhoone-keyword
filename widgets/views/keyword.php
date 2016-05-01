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
?>
<table class="table">
    <tbody>
        <tr>
            <th>Keyword</th>
            <td><?= $keyword->raw ?></td>
        </tr>
        <tr>
            <th>Segmented</th>
            <td><?php print_r($keyword->segmented) ?></td>
        </tr>
    </tbody>
</table>