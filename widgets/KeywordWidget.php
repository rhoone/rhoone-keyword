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

namespace rhoone\keyword\widgets;

use rhoone\models\Keyword;
use yii\base\Widget;

/**
 * Description of KeywordWidget
 *
 * @author vistart <i@vistart.name>
 */
class KeywordWidget extends Widget
{

    public $keyword;

    public function run()
    {
        return $this->render('keyword', ['keyword' => new Keyword($this->keyword)]);
    }
}
