<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/28/19
 * Time: 4:40 PM
 */

namespace App\Traits;


use Webpatser\Uuid\Uuid;

class UniqueIdGenerate
{
    public function uIdGenerate()
    {
        return Uuid::generate(10, null, null);
    }
}