<?php 

require_once __DIR__ . '/Model.php';

class Item extends Model 
{
 protected static $table = 'items';

    // checks if the attribute being saved is password and hashes it if so
    public function __set($name, $value)
    {

        parent::__set($name, $value);
    }


}