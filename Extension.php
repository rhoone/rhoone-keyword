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

namespace rhoone\keyword;

/**
 * Description of Extension
 *
 * @author vistart <i@vistart.name>
 */
class Extension extends \rhoone\extension\Extension
{

    public static function id()
    {
        return static::config()['id'];
    }

    public static function name()
    {
        return static::config()['name'];
    }

    public static function config()
    {
        return [
            'id' => 'keyword',
            'name' => 'Keyword',
            'default' => true,
            'monopolized' => false,
        ];
    }

    public function search($keywords)
    {
        
    }
}
